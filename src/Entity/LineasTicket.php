<?php

namespace App\Entity;

use App\Repository\LineasTicketRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LineasTicketRepository::class)
 */
class LineasTicket
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_ticket;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_articulo;

    /**
     * @ORM\Column(type="integer")
     */
    private $cantidad;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTicket(): ?int
    {
        return $this->id_ticket;
    }

    public function setIdTicket(int $id_ticket): self
    {
        $this->id_ticket = $id_ticket;

        return $this;
    }

    public function getIdArticulo(): ?int
    {
        return $this->id_articulo;
    }

    public function setIdArticulo(int $id_articulo): self
    {
        $this->id_articulo = $id_articulo;

        return $this;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }
}
