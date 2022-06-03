<?php

namespace App\Entity;

use App\Repository\ArticulosRepository;
use Doctrine\DBAL\Types\BlobType;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticulosRepository::class)
 */
class Articulos
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="float")
     */
    private $precio_base;

    /**
     * @ORM\Column(type="float")
     */
    private $iva;

    /**
     * @ORM\Column(type="float")
     */
    private $precio;

    /**
     * @ORM\Column(type="integer")
     */
    private $stock;

     /**
     *
     * @ORM\Column(name="foto", type="blob", nullable=false)
     */
    private $foto;

    /**
     * @ORM\Column(type="float")
     */
    private $precio_compra;

    /**
     * @ORM\Column(type="float")
     */
    private $margen;

    /**
     * @ORM\Column(type="boolean")
     */
    private $activo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getPrecioBase(): ?float
    {
        return $this->precio_base;
    }

    public function setPrecioBase(float $precio_base): self
    {
        $this->precio_base = $precio_base;

        return $this;
    }

    public function getIva(): ?float
    {
        return $this->iva;
    }

    public function setIva(float $iva): self
    {
        $this->iva = floatval($iva);

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    public function getPrecioCompra(): ?float
    {
        return $this->precio_compra;
    }

    public function setPrecioCompra(float $precio_compra): self
    {
        $this->precio_compra = $precio_compra;

        return $this;
    }

    public function getMargen(): ?float
    {
        return $this->margen;
    }

    public function setMargen(float $margen): self
    {
        $this->margen = $margen;

        return $this;
    }

    public function venderArticulo(int $cantidad){

        $this->stock = $this->stock - $cantidad;

    }

    public function addStock(int $cantidad){

        $this->stock = $this->stock + $cantidad;
        
    }

    public function isActivo(): ?bool
    {
        return $this->activo;
    }

    public function setActivo(bool $activo): self
    {
        $this->activo = $activo;

        return $this;
    }

}
