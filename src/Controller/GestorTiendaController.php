<?php

namespace App\Controller;

use App\Entity\Articulos;
use App\Entity\LineasTicket;
use App\Entity\Tickets;
use App\Entity\User;
use App\Form\ArticulosType;
use App\Form\RegistrerType;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\Length;

class GestorTiendaController extends AbstractController
{
    /**
     * @Route("/", name="app_gestor_tienda")
     */
    public function index(): Response
    {

        $this->denyAccessUnlessGranted('ROLE_USER');

        if($this->getUser()->getRoles()[0] == 'ROLE_ADMIN'){
            return $this->redirectToRoute('app_dashboard');
        }else{
            return $this->redirectToRoute('app_catalogo');
        }

        return $this->render('gestor_tienda/index.html.twig', [
            'controller_name' => 'GestorTiendaController',
        ]);
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('gestor_tienda/login.html.twig', [
            'controller_name' => 'GestorTiendaController',
            'error' => $error,
            'last_username' => $lastUsername,
        ]);
    }

    /**
     * @Route("/registrer", name="app_registro")
     */
    public function singup(UserPasswordHasherInterface $PasswordHasher, Request $request, EntityManagerInterface $em): Response
    {

        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $user = new User();
        $error = null;
        $form = $this->createForm(RegistrerType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if (strcmp(strval($form->get('password')->getData()), strval($form->get('repetir_password')->getData())) == 0) {
                $rol = ['ROLE_USER'];
                $user->setRoles($rol);
                $hashedPassword = $PasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                );
                $user->setPassword($hashedPassword);

                try {
                    $em->persist($user);
                    $em->flush();
                } catch (\Exception $e) {
                    $error = "El correo ya está registrado";
                    return $this->render('gestor_tienda/registrer.html.twig', [
                        'controller_name' => 'GestorTiendaController',
                        'error' => $error,
                        'form' => $form->createView(),
                    ]);
                }
                return $this->redirectToRoute('app_gestor_tienda');
            } else {
                $error = 'Las contraseñas no coinciden';
            }
        }

        return $this->render('gestor_tienda/registrer.html.twig', [
            'controller_name' => 'GestorTiendaController',
            'error' => $error,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/logout", name="logout", methods={"GET"})
     */
    public function logout(): Void
    {
        throw new \Exception("Error");
    }


    /**
     * @Route("/nuevoArticulo", name="app_nuevo_articulo")
     */
    public function nuevoArticulo(Request $request, EntityManagerInterface $em): Response
    {

        $this->denyAccessUnlessGranted('ROLE_USER');
        $error = null;

        return $this->render('gestor_tienda/nuevoArticulo.html.twig', [
            'controller_name' => 'GestorTiendaController',
            'error' => $error
        ]);
    }

    /**
     * @Route("/procesaNuevoArticulo", name="app_procesa_nuevo_articulo")
     */
    public function procesaNuevoArticulo(Request $request, EntityManagerInterface $em): Response
    {

        $this->denyAccessUnlessGranted('ROLE_USER');

        $articulo = new Articulos();
        $error = null;

        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precioBase = $_POST['precio_base'];
        $precioCompra = $_POST['precio_compra'];
        $stock = $_POST['stock'];
        $iva = $_POST['iva'];
        $numIva = floatval($iva);
        if ($numIva == 21) {
            $iva = 0.21;
        } else if ($numIva == 10) {
            $iva = 0.10;
        } else if ($numIva == 4) {
            $iva = 0.04;
        }

        $revisar = getimagesize($_FILES["image"]["tmp_name"]);
        if ($revisar != false) {
            $image = $_FILES['image']['tmp_name'];
            $imgContenido = file_get_contents($image);
        }

        $articulo2 = $em->getRepository(Articulos::class)->findOneBy(array('nombre' => $nombre));

        if (empty($articulo2)) {

            $precio = floor((($iva * $precioBase) + $precioBase) * 100) / 100;
            $articulo->setNombre($nombre);
            $articulo->setDescripcion($descripcion);
            $articulo->setPrecioBase($precioBase);
            $articulo->setPrecioCompra($precioCompra);
            $articulo->setIva($numIva);
            $articulo->setFoto($imgContenido);
            $articulo->setStock($stock);
            $articulo->setPrecio($precio);
            $articulo->setMargen($precio - $precioCompra);
            $articulo->setActivo(1);


            try {
                $em->persist($articulo);
                $em->flush();
            } catch (\Exception $e) {
                $error = "Ya hay un articulo con el mismo nombre";
                return $this->render('gestor_tienda/nuevoArticulo.html.twig', [
                    'controller_name' => 'GestorTiendaController',
                    'error' => $error,
                ]);
            }

            $em->persist($articulo);
            $em->flush();

            return $this->redirectToRoute('app_gestor_tienda');
        } else {
            echo '<script>console.log("error");</script>';
            $error = 'Ya hay un articulo con el mismo nombre';
        }

        return $this->render('gestor_tienda/nuevoArticulo.html.twig', [
            'controller_name' => 'GestorTiendaController',
            'error' => $error,
        ]);
    }

    /**
     * @Route("/catalogo", name="app_catalogo")
     */
    public function catalogo(Request $request, EntityManagerInterface $em): Response
    {

        $this->denyAccessUnlessGranted('ROLE_USER');

        $articulos = $em->getRepository(Articulos::class)->findAll();

        $images = array();
        foreach ($articulos as $key => $articulo) {
            $images[$key] = base64_encode(stream_get_contents($articulo->getFoto()));
        }

        return $this->render('gestor_tienda/articulos.html.twig', [
            'controller_name' => 'GestorTiendaController',
            'tipo' => 'compra',
            'articulos' => $articulos,
            'images' => $images,
        ]);
    }

    /**
     * @Route("/procesarCompra", name="app_procesar_compra")
     */
    public function procesarCompra(Request $request, EntityManagerInterface $em)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $datos = $_POST['datos'];

        $ticket = new Tickets;
        $ticket->setFecha(new DateTime('now'));
        $ticket->setTotal(0);
        $em->persist($ticket);
        $em->flush();

        $ultimoTicket =  $em->getRepository(Tickets::class)->findLastTicket();

        for ($i = 0; $i < count($datos); $i++) {
            $articulo = $em->getRepository(Articulos::class)->findBy(array('id' => $datos[$i][0]));
            $lineaTicket = new LineasTicket;
            $lineaTicket->setIdTicket($ultimoTicket->getId());
            $lineaTicket->setIdArticulo($articulo[0]->getId());
            $lineaTicket->setCantidad($datos[$i][1]);
            $articulo[0]->venderArticulo($datos[$i][1]);
            $em->persist($lineaTicket);
            $em->persist($articulo[0]);
            $em->flush();
        }

        $lineasTicket = $em->getRepository(LineasTicket::class)->findBy(array('id_ticket' => $ultimoTicket->getId()));

        $total = 0;

        for ($i = 0; $i < count($lineasTicket); $i++) {
            $articulo = $em->getRepository(Articulos::class)->findBy(array('id' => $lineasTicket[$i]->getIdArticulo()));
            $total += ($articulo[0]->getPrecio() * $lineasTicket[$i]->getCantidad());
        }

        $ticket->setTotal($total);

        $em->persist($ticket);
        $em->flush();

        return new JsonResponse(0);
    }

    /**
     * @Route("/verTicket", name="app_ver_ticket")
     */
    public function verTicket(Request $request, EntityManagerInterface $em)
    {

        $this->denyAccessUnlessGranted('ROLE_USER');

        $ultimoTicket =  $em->getRepository(Tickets::class)->findLastTicket();
        $lineasTicket = $em->getRepository(LineasTicket::class)->findBy(array('id_ticket' => $ultimoTicket->getId()));

        $articulos = [];
        $cantidad = [];

        for ($i = 0; $i < count($lineasTicket); $i++) {
            $articulo = $em->getRepository(Articulos::class)->findBy(array('id' => $lineasTicket[$i]->getIdArticulo()));
            array_push($articulos, $articulo[0]);
            array_push($cantidad, $lineasTicket[$i]->getCantidad());
        }


        return $this->render('gestor_tienda/tickets.html.twig', [
            'controller_name' => 'GestorTiendaController',
            'articulos' => $articulos,
            'cantidad' => $cantidad,
            'id' => $ultimoTicket->getId(),
        ]);
    }

        /**
     * @Route("/verTicketDevuelto", name="app_ver_ticket_devuelto")
     */
    public function verTicketDevuelto(Request $request, EntityManagerInterface $em)
    {

        $this->denyAccessUnlessGranted('ROLE_USER');

        $ultimoTicket =  $em->getRepository(Tickets::class)->findLastTicket();
        $lineasTicket = $em->getRepository(LineasTicket::class)->findBy(array('id_ticket' => $ultimoTicket->getId()));

       
        $articulo = $em->getRepository(Articulos::class)->findBy(array('id' => $lineasTicket[0]->getIdArticulo()));
           
        $precioNegativo = '-' . $articulo[0]->getPrecio();
        $precio = floatval($precioNegativo);
        $articulo[0]->setPrecio($precio);

        return $this->render('gestor_tienda/ticketDevuelto.html.twig', [
            'controller_name' => 'GestorTiendaController',
            'articulo' => $articulo[0],
            'cantidad' => 1,
            'id' => $ultimoTicket->getId(),
        ]);
    }

    /**
     * @Route("/verTicketPorId", name="app_ver_ticket_id")
     */
    public function verTicketPorId(Request $request, EntityManagerInterface $em)
    {

        $this->denyAccessUnlessGranted('ROLE_USER');

        $id = $_POST['id'];

        $array = $em->getRepository(Tickets::class)->findBy(array('id' => $id));
        $lineasTicket = $em->getRepository(LineasTicket::class)->findBy(array('id_ticket' => $array[0]->getId()));

        $articulos = [];
        $cantidad = [];

        for ($i = 0; $i < count($lineasTicket); $i++) {
            $articulo = $em->getRepository(Articulos::class)->findBy(array('id' => $lineasTicket[$i]->getIdArticulo()));
            array_push($articulos, $articulo[0]);
            array_push($cantidad, $lineasTicket[$i]->getCantidad());
        }


        return $this->render('gestor_tienda/tickets.html.twig', [
            'controller_name' => 'GestorTiendaController',
            'articulos' => $articulos,
            'cantidad' => $cantidad,
            'id' => $id,
        ]);
    }

    /**
     * @Route("/stock", name="app_stock")
     */
    public function stock(Request $request, EntityManagerInterface $em): Response
    {

        $this->denyAccessUnlessGranted('ROLE_USER');

        $articulos = $em->getRepository(Articulos::class)->findAll();

        $images = array();
        foreach ($articulos as $key => $articulo) {
            $images[$key] = base64_encode(stream_get_contents($articulo->getFoto()));
        }

        return $this->render('gestor_tienda/stock.html.twig', [
            'controller_name' => 'GestorTiendaController',
            'tipo' => 'stock',
            'articulos' => $articulos,
            'images' => $images,
        ]);
    }

    /**
     * @Route("/añadirStock", name="app_añadir_stock")
     */
    public function añadirStock(Request $request, EntityManagerInterface $em): Response
    {

        $this->denyAccessUnlessGranted('ROLE_USER');

        $id = $_POST['id'];
        $stock = $_POST['stock'];
        $array = $em->getRepository(Articulos::class)->findBy(array('id' => $id));
        $articulo = $array[0];

        $articulo->addStock($stock);
        $em->persist($articulo);
        $em->flush($articulo);


        return new JsonResponse(0);
    }

    /**
     * @Route("/getArticulo", name="app_get_articulo")
     */
    public function getArticulo(Request $request, EntityManagerInterface $em): Response
    {

        $id = $_POST['id'];
        $array = $em->getRepository(Articulos::class)->findBy(array('id' => $id));
        $articulo = $array[0];


        $objeto = ['nombre' => $articulo->getNombre(), 'descripcion' => $articulo->getDescripcion(), 
        'precio_compra' => $articulo->getPrecioCompra(), 'precio_base' => $articulo->getPrecioBase(),
        'iva' => $articulo->getIva(), 'activo' => $articulo->isActivo()];

        $respuesta = json_encode($objeto);


        return new JsonResponse($respuesta);
    }

    /**
     * @Route("/editar", name="app_editar")
     */
    public function editar(Request $request, EntityManagerInterface $em): Response
    {

        $this->denyAccessUnlessGranted('ROLE_USER');

        $articulos = $em->getRepository(Articulos::class)->findAll();

        $images = array();
        foreach ($articulos as $key => $articulo) {
            $images[$key] = base64_encode(stream_get_contents($articulo->getFoto()));
        }

        return $this->render('gestor_tienda/editar.html.twig', [
            'controller_name' => 'GestorTiendaController',
            'articulos' => $articulos,
            'images' => $images,
        ]);
    }

    /**
     * @Route("/editarArticulo", name="app_editar_articulo")
     */
    public function editarArticulo(Request $request, EntityManagerInterface $em): Response
    {

        $this->denyAccessUnlessGranted('ROLE_USER');

        $id = $_POST['idArticulo'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precioBase = $_POST['precio_base'];
        $precioCompra = $_POST['precio_compra'];
        $iva = $_POST['iva'];
        $activo = $_POST['activo'];
        $numIva = floatval($iva);
        if ($numIva == 21) {
            $iva = 0.21;
        } else if ($numIva == 10) {
            $iva = 0.10;
        } else if ($numIva == 4) {
            $iva = 0.04;
        }

        $array = $em->getRepository(Articulos::class)->findBy(array('id' => $id));
        $articulo = $array[0];

        if($_FILES["image"]["tmp_name"]){
            $revisar = getimagesize($_FILES["image"]["tmp_name"]);
            if ($revisar != false) {
                $image = $_FILES['image']['tmp_name'];
                $imgContenido = file_get_contents($image);
            }
            $articulo->setFoto($imgContenido);
        }

        $precio = floor((($iva * $precioBase) + $precioBase) * 100) / 100;
        $articulo->setNombre($nombre);
        $articulo->setDescripcion($descripcion);
        $articulo->setPrecioBase($precioBase);
        $articulo->setPrecioCompra($precioCompra);
        $articulo->setIva($numIva);
        $articulo->setPrecio($precio);
        $articulo->setMargen($precio - $precioCompra);
        $articulo->setActivo($activo);


        try {
            $em->persist($articulo);
            $em->flush();
        } catch (\Exception $e) {
            $error = "Ya hay un articulo con el mismo nombre";
            return $this->render('gestor_tienda/nuevoArticulo.html.twig', [
                'controller_name' => 'GestorTiendaController',
                'error' => $error,
            ]);
        }

        $em->persist($articulo);
        $em->flush();

        return $this->redirectToRoute('app_editar');
    }

    /**
     * @Route("/buscarTickets", name="app_buscar_tickets")
     */
    public function buscarTickets(Request $request, EntityManagerInterface $em): Response
    {

        return $this->render('gestor_tienda/buscarTickets.html.twig', [
            'controller_name' => 'GestorTiendaController',
        ]);
    }


    /**
     * @Route("/getTicketBy", name="app_get_ticketBy")
     */
    public function getTicketBy(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $id = $_POST['id'];

        $array = $em->getRepository(Tickets::class)->findBy(array('id' => $id));

        if(count($array) == 0){
            return new JsonResponse(0);
        }else{

            $objeto = ['id' => $array[0]->getId(), 'fecha' => $array[0]->getFecha(), 'total' => $array[0]->getTotal()];
            $respuesta = json_encode($objeto);
            return new JsonResponse($respuesta);
        }

        
    }


    /**
     * @Route("/getTickets", name="app_get_tickets")
     */
    public function getTickets(Request $request, EntityManagerInterface $em): Response
    {

        $this->denyAccessUnlessGranted('ROLE_USER');

        $array = $em->getRepository(Tickets::class)->findAll();

        $objetos = [];

        for($i = 0; $i < count($array); $i++){

            $ticket = $array[$i];

            $objeto = ['fecha' => $ticket->getFecha(), 'total' => $ticket->getTotal()];
    
            $respuesta = json_encode($objeto);
            array_push($objetos,$respuesta);
            
        }

        return new JsonResponse($objetos);
    }

    /**
     * @Route("/getDatosVentas", name="app_get_datos_ventas")
     */
    public function getDatosVentas(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $lineasTicket = $em->getRepository(LineasTicket::class)->findAll();
        
        $articulos = $em->getRepository(Articulos::class)->findAll();
        $idArticulos = [];

        $idArticulos = ($em->getConnection()->executeQuery('SELECT id_articulo, SUM(cantidad) as cantidad FROM lineas_ticket group by id_articulo order by cantidad desc limit 10')->fetchAll());

        return new JsonResponse($idArticulos);
    }

    /**
     * @Route("/dashboard", name="app_dashboard")
     */
    public function darshboard(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('gestor_tienda/graficos.html.twig', [
            'controller_name' => 'GestorTiendaController',
        ]);
    }

    /**
     * @Route("/getTicketDevolucion", name="app_get_ticket_devolucion")
     */
    public function getTicketDevolucion(Request $request, EntityManagerInterface $em): Response
    {

        $this->denyAccessUnlessGranted('ROLE_USER');

        $id = $_POST['id'];

        $array = $em->getRepository(Tickets::class)->findBy(array('id' => $id));
        $lineasTicket = $em->getRepository(LineasTicket::class)->findBy(array('id_ticket' => $array[0]->getId()));

        $articulos = [];

        for ($i = 0; $i < count($lineasTicket); $i++) {
            $articulo = $em->getRepository(Articulos::class)->findBy(array('id' => $lineasTicket[$i]->getIdArticulo()));
            array_push($articulos, $articulo[0]);
        }

        $images = array();
        foreach ($articulos as $key => $articulo) {
            $images[$key] = base64_encode(stream_get_contents($articulo->getFoto()));
        }

        return $this->render('gestor_tienda/devolucion.html.twig', [
            'controller_name' => 'GestorTiendaController',
            'tipo' => 'compra',
            'articulos' => $articulos,
            'images' => $images,
            'ticket' => $id,
        ]);

    }

    /**
     * @Route("/procesaDevolucion", name="app_procesa_devolucion")
     */
    public function procesarDevolucion(Request $request, EntityManagerInterface $em): Response
    {

        $this->denyAccessUnlessGranted('ROLE_USER');

        $id = $_POST['id'];
        $ticket = $_POST['ticket'];

        $array = $em->getRepository(Tickets::class)->findBy(array('id' => $ticket));
        $articulo = $em->getRepository(Articulos::class)->findBy(array('id' => $id));
        
        $articulo[0]->addStock(1);
        
        $nuevoTicket = new Tickets();
        $nuevoTicket->setFecha($array[0]->getFecha());
        $precioNegativo = '-' . $articulo[0]->getPrecio();
        $precio = floatval($precioNegativo);
        $nuevoTicket->setTotal($precio);

        $em->persist($articulo[0]);
        $em->persist($nuevoTicket);
        $em->flush();

        $ultimoTicket =  $em->getRepository(Tickets::class)->findLastTicket();
        $lineasTicket = new LineasTicket();
        $lineasTicket->setCantidad(1);
        $lineasTicket->setIdTicket($ultimoTicket->getId());
        $lineasTicket->setIdArticulo($articulo[0]->getId());

        $em->persist($lineasTicket);
        $em->flush();

        return new JsonResponse(0);

    }

     /**
     * @Route("/cambioPass", name="app_cambio_pass")
     */
    public function cambioPass(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $error = '';

        return $this->render('gestor_tienda/cambioPass.html.twig', [
            'controller_name' => 'GestorTiendaController',
            'error' => $error
        ]);
    }

    /**
     * @Route("/procesaCambioPass", name="app_procesa_cambio_pass")
     */
    public function procesaCambioPass(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $PasswordHasher): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $newPass = $_POST['password'];
        $newPass2 = $_POST['password2'];

        $user = $this->getUser();
       

            if($newPass == $newPass2){

                $hashedPassword = $PasswordHasher->hashPassword(
                    $this->getUser(),
                    $newPass
                );
                $user->setPassword($hashedPassword);
                $em->persist($user);
                $em->flush();
                return $this->redirectToRoute('app_gestor_tienda');
            }else{
                //las contraseñas no coinciden
                return $this->render('gestor_tienda/cambioPass.html.twig', [
                    'controller_name' => 'GestorTiendaController',
                    'error' => 'Las contraseñas no coinciden',
                ]);
            }

        return $this->render('gestor_tienda/cambioPass.html.twig', [
            'controller_name' => 'GestorTiendaController',
        ]);
    }

}
