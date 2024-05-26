<?php

namespace App\Entity;

use App\Repository\AlbumRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlbumRepository::class)]
class Album
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titulo = null;

    #[ORM\Column(length: 255)]
    private ?string $artista = null;

    #[ORM\Column(length: 255)]
    private ?string $sello = null;

    #[ORM\Column(length: 255)]
    private ?string $categoria = null;

    #[ORM\Column]
    private ?int $ano = null;

    #[ORM\Column]
    private ?int $pistas = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fechaCompra = null;

    #[ORM\Column(length: 255)]
    private ?string $formato = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): static
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getArtista(): ?string
    {
        return $this->artista;
    }

    public function setArtista(string $artista): static
    {
        $this->artista = $artista;

        return $this;
    }

    public function getSello(): ?string
    {
        return $this->sello;
    }

    public function setSello(string $sello): static
    {
        $this->sello = $sello;

        return $this;
    }

    public function getCategoria(): ?string
    {
        return $this->categoria;
    }

    public function setCategoria(string $categoria): static
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getAno(): ?int
    {
        return $this->ano;
    }

    public function setAno(int $ano): static
    {
        $this->ano = $ano;

        return $this;
    }

    public function getPistas(): ?int
    {
        return $this->pistas;
    }

    public function setPistas(int $pistas): static
    {
        $this->pistas = $pistas;

        return $this;
    }

    public function getFechaCompra(): ?\DateTimeInterface
    {
        return $this->fechaCompra;
    }

    public function setFechaCompra(\DateTimeInterface $fechaCompra): static
    {
        $this->fechaCompra = $fechaCompra;

        return $this;
    }

    public function getFormato(): ?string
    {
        return $this->formato;
    }

    public function setFormato(string $formato): static
    {
        $this->formato = $formato;

        return $this;
    }
}
