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

    /*
    #[ORM\ManyToOne]
    private ?Airport $airport_depart = null;

    #[ORM\ManyToOne]
    private ?Airport $airport_arrive = null;
*/

    /*#[ORM\ManyToOne(cascade: ["remove"])]
    #[ORM\JoinColumn(name: "airport_depart", referencedColumnName: "id", onDelete: "CASCADE")]
    private ?Airport $airport_depart = null;

    #[ORM\ManyToOne(cascade: ["remove"])]
    #[ORM\JoinColumn(name: "airport_arrive", referencedColumnName: "id", onDelete: "CASCADE")]
    private ?Airport $airport_arrive = null;
*/

    
    #[ORM\ManyToOne]
    private ?Airport $airport_depart = null;

    #[ORM\ManyToOne]
    private ?Airport $airport_arrive = null;


    #[ORM\ManyToOne]
    private ?Volclass $volclass = null;

    #[ORM\ManyToOne]
    private ?User $user = null;

   

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

    public function getairportDepart(): ?Airport
    {
        return $this->airport_depart;
    }

    public function setairportDepart(?Airport $airport_depart): static
    {
        $this->airport_depart = $airport_depart;

        return $this;
    }

    public function getairportarrive(): ?Airport
    {
        return $this->airport_arrive;
    }

    public function setairportarrive(?Airport $airport_arrive): static
    {
        $this->airport_arrive = $airport_arrive;

        return $this;
    }

    public function getVolclass(): ?Volclass
    {
        return $this->volclass;
    }

    public function setVolclass(?Volclass $volclass): static
    {
        $this->volclass = $volclass;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

     
}
