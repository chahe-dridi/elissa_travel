<?php

namespace App\Entity;

use App\Repository\VolRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VolRepository::class)]
class Vol
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $compagnie_aerienne = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $heure_depart = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $heure_arrive = null;

    #[ORM\Column]
    private ?bool $escale = null;

    #[ORM\Column]
    private ?bool $disponible = null;

    #[ORM\ManyToOne]
    private ?airport $airport_depart = null;

    #[ORM\ManyToOne]
    private ?airport $airport_arrive = null;

    #[ORM\ManyToOne]
    private ?volclass $volclass = null;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompagnieAerienne(): ?string
    {
        return $this->compagnie_aerienne;
    }

    public function setCompagnieAerienne(string $compagnie_aerienne): static
    {
        $this->compagnie_aerienne = $compagnie_aerienne;

        return $this;
    }

    public function getHeureDepart(): ?\DateTimeInterface
    {
        return $this->heure_depart;
    }

    public function setHeureDepart(\DateTimeInterface $heure_depart): static
    {
        $this->heure_depart = $heure_depart;

        return $this;
    }

    public function getHeureArrive(): ?\DateTimeInterface
    {
        return $this->heure_arrive;
    }

    public function setHeureArrive(\DateTimeInterface $heure_arrive): static
    {
        $this->heure_arrive = $heure_arrive;

        return $this;
    }

    public function isEscale(): ?bool
    {
        return $this->escale;
    }

    public function setEscale(bool $escale): static
    {
        $this->escale = $escale;

        return $this;
    }

    public function isDisponible(): ?bool
    {
        return $this->disponible;
    }

    public function setDisponible(bool $disponible): static
    {
        $this->disponible = $disponible;

        return $this;
    }

    public function getAirportDepart(): ?airport
    {
        return $this->airport_depart;
    }

    public function setAirportDepart(?airport $airport_depart): static
    {
        $this->airport_depart = $airport_depart;

        return $this;
    }

    public function getAirportArrive(): ?airport
    {
        return $this->airport_arrive;
    }

    public function setAirportArrive(?airport $airport_arrive): static
    {
        $this->airport_arrive = $airport_arrive;

        return $this;
    }

    public function getVolclass(): ?volclass
    {
        return $this->volclass;
    }

    public function setVolclass(?volclass $volclass): static
    {
        $this->volclass = $volclass;

        return $this;
    }

    
}
