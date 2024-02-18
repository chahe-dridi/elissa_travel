<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChambreRepository::class)]
class Chambre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $typeChambre = null;

    #[ORM\Column(length: 255)]
    private ?string $vueHotel = null;

    #[ORM\Column(length: 255)]
    private ?string $typeLogHotel = null;

    #[ORM\Column]
    private ?float $prixHotel = null;

    #[ORM\ManyToOne(inversedBy: 'chambres')]
    private ?Hotel $Hotel = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeChambre(): ?string
    {
        return $this->typeChambre;
    }

    public function setTypeChambre(string $typeChambre): static
    {
        $this->typeChambre = $typeChambre;

        return $this;
    }

    public function getVueHotel(): ?string
    {
        return $this->vueHotel;
    }

    public function setVueHotel(string $vueHotel): static
    {
        $this->vueHotel = $vueHotel;

        return $this;
    }

    public function getTypeLogHotel(): ?string
    {
        return $this->typeLogHotel;
    }

    public function setTypeLogHotel(string $typeLogHotel): static
    {
        $this->typeLogHotel = $typeLogHotel;

        return $this;
    }

    public function getPrixHotel(): ?float
    {
        return $this->prixHotel;
    }

    public function setPrixHotel(float $prixHotel): static
    {
        $this->prixHotel = $prixHotel;

        return $this;
    }

    public function getHotel(): ?Hotel
    {
        return $this->Hotel;
    }

    public function setHotel(?Hotel $Hotel): static
    {
        $this->Hotel = $Hotel;

        return $this;
    }
}
