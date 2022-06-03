<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* gestor_tienda/articulos.html.twig */
class __TwigTemplate_02367cce174f9bff58e1ab9623c273568ecf69166d8780be43a00849b35ea389 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/articulos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/articulos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestor_tienda/articulos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
<body class='fondoGris'>

    <div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Añadir Articulo</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p id='tituloModal'></p>
                    <img id='imgModal' width='100px'>
                    <p hidden id='idModal'></p>
                    <input type=\"number\" id=\"cantidadModal\" onkeypress=\"return (event.charCode >= 48 && event.charCode <= 57)\" value='1' min='0'>
                    <p hidden id='errorStock' class='error'></p>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancelar</button>
                    <button type=\"button\" class=\"btn btn-primary\" id='añadirCarrito'>Añadir al Carrito</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade modalCancelar\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Cancelar Compra</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p>¿Seguro que quieres eliminar el carrito?</p>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">No</button>
                    <button type=\"button\" class=\"btn btn-primary\" id='aceptarMensaje'>Sí</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade modalCarrito\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"staticBackdropLabel\">¡Atencion!/h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p>No hay articulos en el carrito</p>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">

        <div class=\"input-group flex-nowrap mt-4 mb-4\">
            <span class=\"input-group-text\" id=\"addon-wrapping\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\"
\t\t\t\t\theight=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
\t\t\t\t\t<path
\t\t\t\t\t\td=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\" />
\t\t\t\t</svg></span>
            <input type=\"text\" class=\"form-control buscador\" placeholder=\"Buscar Articulo\" aria-label=\"Username\" aria-describedby=\"addon-wrapping\">
        </div>
        <div class=\"row justify-content-center\">
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) || array_key_exists("articulos", $context) ? $context["articulos"] : (function () { throw new RuntimeError('Variable "articulos" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["articulo"]) {
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["articulo"], "activo", [], "any", false, false, false, 73), 1))) {
                // line 74
                echo "            <div class='articulo col-md-3 fondoBlanco m-3 text-center bordesRedondos' id='articulo-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 74), "html", null, true);
                echo "'>
                <h3 class='nombre-";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 75), "html", null, true);
                echo " mt-3'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "nombre", [], "any", false, false, false, 75), "html", null, true);
                echo "</h3>
                <img src=\"data:image/png;base64,";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 76, $this->source); })()), $context["key"], [], "array", false, false, false, 76), "html", null, true);
                echo "\" class='img-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 76), "html", null, true);
                echo " img-fluid mt-0' />
                <p>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "descripcion", [], "any", false, false, false, 77), "html", null, true);
                echo "</p>
                <p>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "precio", [], "any", false, false, false, 78), "html", null, true);
                echo "€</p>
                <p class='stock-";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 79), "html", null, true);
                echo "'>
                    ";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "stock", [], "any", false, false, false, 80), "html", null, true);
                echo " Unidades disponibles</p>
            </div>
            ";
            }
            // line 82
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </div>
        <div class='container-fluid'>
            <div class='row justify-content-center'>
                <button type=\"button\" class=\"btn btn-danger col-3 mt-2\t\" id='cancelarCompra'>Cancelar compra</button>
            </div>
            <div class='row justify-content-center'>
                <button type=\"button\" class=\"btn btn-primary col-3 mt-2 mb-4\" id='procesarCompra'>Procesar
\t\t\t\t\tcompra</button>
            </div>
        </div>
    </div>
</body>
<script>
    //window.onload = function() {  
    \$('.nav-Articulos').addClass('active');

    carrito = [];
    contador = 0;

    articulos = document.getElementsByClassName('articulo');

    \$('.buscador').keyup(function(e) {
        for (i = 0; i < articulos.length; i++) {
            articulo = articulos[i];
            selector = '.nombre-' + articulo.id.substr(9);

            if (!\$(selector).html().toLowerCase().includes((\$('.buscador').val().toLowerCase()))) {
                \$(selector).parent().attr('hidden', true);
            } else {
                \$(selector).parent().attr('hidden', false);
            }
            if (\$('.buscador').val() == '') {
                \$(selector).parent().attr('hidden', false);
            }
        }
    });

    for (i = 0; i < articulos.length; i++) {
        articulo = articulos[i];
        selector = '#' + articulo.id;
        id = articulo.id.split('-')[1];
        selectorStock = \".stock-\" + id;
        stock = \$(selectorStock).html().substr(7);
        if (stock != 0) {
            \$(selector).attr(\"onclick\", \"pulsado(\" + id + \")\");
        }
    }

    function pulsado(id) {

        claseNombre = '.nombre-' + id;
        claseImg = '.img-' + id;
        nombre = \$(claseNombre);
        img = \$(claseImg);
        selectorStock = \".stock-\" + id;
        stock = \$(selectorStock).html().substr(7);
        \$('#tituloModal').html(nombre.html());
        \$('#imgModal').attr('src', img.attr('src'));
        \$('#cantidadModal').val(1);
        \$('#idModal').html(id);
        \$('#staticBackdrop').modal('show');
        \$('#cantidadModal').attr(\"max\", stock);
        \$('#añadirCarrito').attr(\"onclick\", \"añadirCarrito(\" + id + \")\");

    }

    function añadirCarrito(id) {

        \$('#errorStock').attr('hidden');
        selectorStock = \".stock-\" + id;
        stock = parseInt(\$(selectorStock).html().substr(7));

        if (stock < parseInt(\$('#cantidadModal').val())) {
            \$('#errorStock').html('No hay tantas existencias. Stock: ' + stock);
            \$('#errorStock').removeAttr('hidden');
        } else {

            if (carrito.length == 0) {
                carrito.push([
                    parseInt(\$('#idModal').html()),
                    parseInt(\$('#cantidadModal').val())
                ]);
            }

            for (i = 0; i < carrito.length; i++) {
                if (carrito[i].indexOf(id) != -1 && contador != 0) {
                    carrito[i][1] = parseInt(carrito[i][1]) + parseInt(\$('#cantidadModal').val());
                    break;
                } else if (i == carrito.length - 1 && contador != 0) {
                    carrito.push([
                        parseInt(\$('#idModal').html()),
                        parseInt(\$('#cantidadModal').val())
                    ]);
                    break;
                }
                contador++;
            }

            \$('#staticBackdrop').modal('hide');
        }

    }

    \$('#procesarCompra').on('click', function() {

        if (carrito.length != 0) {

            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_procesar_compra");
        echo "\",
                data: {
                    'datos': carrito
                },
                success: function(result) {
                    console.log(result);
                    if (result == 0) {
                        location.href = 'verTicket';
                    }
                },
                error: function(result) {
                    console.log(\"error: \", result);
                }
            });
        } else {
            \$('.modalCarrito').modal('show');

        }

    });

    \$('#cancelarCompra').on('click', function() {

        \$('.modalCancelar').modal('show');

    });

    \$('#aceptarMensaje').on('click', function() {

        location.reload();

    });

    //}
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestor_tienda/articulos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 192,  187 => 83,  181 => 82,  175 => 80,  171 => 79,  167 => 78,  163 => 77,  157 => 76,  151 => 75,  146 => 74,  140 => 73,  67 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block body %}

<body class='fondoGris'>

    <div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Añadir Articulo</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p id='tituloModal'></p>
                    <img id='imgModal' width='100px'>
                    <p hidden id='idModal'></p>
                    <input type=\"number\" id=\"cantidadModal\" onkeypress=\"return (event.charCode >= 48 && event.charCode <= 57)\" value='1' min='0'>
                    <p hidden id='errorStock' class='error'></p>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancelar</button>
                    <button type=\"button\" class=\"btn btn-primary\" id='añadirCarrito'>Añadir al Carrito</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade modalCancelar\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Cancelar Compra</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p>¿Seguro que quieres eliminar el carrito?</p>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">No</button>
                    <button type=\"button\" class=\"btn btn-primary\" id='aceptarMensaje'>Sí</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade modalCarrito\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"staticBackdropLabel\">¡Atencion!/h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p>No hay articulos en el carrito</p>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">

        <div class=\"input-group flex-nowrap mt-4 mb-4\">
            <span class=\"input-group-text\" id=\"addon-wrapping\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\"
\t\t\t\t\theight=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
\t\t\t\t\t<path
\t\t\t\t\t\td=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\" />
\t\t\t\t</svg></span>
            <input type=\"text\" class=\"form-control buscador\" placeholder=\"Buscar Articulo\" aria-label=\"Username\" aria-describedby=\"addon-wrapping\">
        </div>
        <div class=\"row justify-content-center\">
            {% for key ,articulo in articulos %} {% if articulo.activo == 1 %}
            <div class='articulo col-md-3 fondoBlanco m-3 text-center bordesRedondos' id='articulo-{{articulo.id}}'>
                <h3 class='nombre-{{articulo.id}} mt-3'>{{articulo.nombre}}</h3>
                <img src=\"data:image/png;base64,{{ images[key] }}\" class='img-{{articulo.id}} img-fluid mt-0' />
                <p>{{articulo.descripcion}}</p>
                <p>{{articulo.precio}}€</p>
                <p class='stock-{{articulo.id}}'>
                    {{articulo.stock}} Unidades disponibles</p>
            </div>
            {% endif %} {% endfor %}
        </div>
        <div class='container-fluid'>
            <div class='row justify-content-center'>
                <button type=\"button\" class=\"btn btn-danger col-3 mt-2\t\" id='cancelarCompra'>Cancelar compra</button>
            </div>
            <div class='row justify-content-center'>
                <button type=\"button\" class=\"btn btn-primary col-3 mt-2 mb-4\" id='procesarCompra'>Procesar
\t\t\t\t\tcompra</button>
            </div>
        </div>
    </div>
</body>
<script>
    //window.onload = function() {  
    \$('.nav-Articulos').addClass('active');

    carrito = [];
    contador = 0;

    articulos = document.getElementsByClassName('articulo');

    \$('.buscador').keyup(function(e) {
        for (i = 0; i < articulos.length; i++) {
            articulo = articulos[i];
            selector = '.nombre-' + articulo.id.substr(9);

            if (!\$(selector).html().toLowerCase().includes((\$('.buscador').val().toLowerCase()))) {
                \$(selector).parent().attr('hidden', true);
            } else {
                \$(selector).parent().attr('hidden', false);
            }
            if (\$('.buscador').val() == '') {
                \$(selector).parent().attr('hidden', false);
            }
        }
    });

    for (i = 0; i < articulos.length; i++) {
        articulo = articulos[i];
        selector = '#' + articulo.id;
        id = articulo.id.split('-')[1];
        selectorStock = \".stock-\" + id;
        stock = \$(selectorStock).html().substr(7);
        if (stock != 0) {
            \$(selector).attr(\"onclick\", \"pulsado(\" + id + \")\");
        }
    }

    function pulsado(id) {

        claseNombre = '.nombre-' + id;
        claseImg = '.img-' + id;
        nombre = \$(claseNombre);
        img = \$(claseImg);
        selectorStock = \".stock-\" + id;
        stock = \$(selectorStock).html().substr(7);
        \$('#tituloModal').html(nombre.html());
        \$('#imgModal').attr('src', img.attr('src'));
        \$('#cantidadModal').val(1);
        \$('#idModal').html(id);
        \$('#staticBackdrop').modal('show');
        \$('#cantidadModal').attr(\"max\", stock);
        \$('#añadirCarrito').attr(\"onclick\", \"añadirCarrito(\" + id + \")\");

    }

    function añadirCarrito(id) {

        \$('#errorStock').attr('hidden');
        selectorStock = \".stock-\" + id;
        stock = parseInt(\$(selectorStock).html().substr(7));

        if (stock < parseInt(\$('#cantidadModal').val())) {
            \$('#errorStock').html('No hay tantas existencias. Stock: ' + stock);
            \$('#errorStock').removeAttr('hidden');
        } else {

            if (carrito.length == 0) {
                carrito.push([
                    parseInt(\$('#idModal').html()),
                    parseInt(\$('#cantidadModal').val())
                ]);
            }

            for (i = 0; i < carrito.length; i++) {
                if (carrito[i].indexOf(id) != -1 && contador != 0) {
                    carrito[i][1] = parseInt(carrito[i][1]) + parseInt(\$('#cantidadModal').val());
                    break;
                } else if (i == carrito.length - 1 && contador != 0) {
                    carrito.push([
                        parseInt(\$('#idModal').html()),
                        parseInt(\$('#cantidadModal').val())
                    ]);
                    break;
                }
                contador++;
            }

            \$('#staticBackdrop').modal('hide');
        }

    }

    \$('#procesarCompra').on('click', function() {

        if (carrito.length != 0) {

            \$.ajax({
                type: \"POST\",
                url: \"{{ path('app_procesar_compra') }}\",
                data: {
                    'datos': carrito
                },
                success: function(result) {
                    console.log(result);
                    if (result == 0) {
                        location.href = 'verTicket';
                    }
                },
                error: function(result) {
                    console.log(\"error: \", result);
                }
            });
        } else {
            \$('.modalCarrito').modal('show');

        }

    });

    \$('#cancelarCompra').on('click', function() {

        \$('.modalCancelar').modal('show');

    });

    \$('#aceptarMensaje').on('click', function() {

        location.reload();

    });

    //}
</script>
{% endblock %}", "gestor_tienda/articulos.html.twig", "/opt/lampp/htdocs/GestorTienda/templates/gestor_tienda/articulos.html.twig");
    }
}
