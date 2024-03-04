<?php

namespace App\Entity;

use App\Repository\VoyageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: VoyageRepository::class)]
class Voyage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column (length: 255)]
    #[Assert\NotBlank(message: "Le mois est requis")]
     private ?string $mois = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "L'année est requise")]
    #[Assert\Type(type: 'integer', message: "L'année doit être un nombre")]
    private ?int $annee = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La ville de départ est requise")]

    private ?string $villedepart = null;

    #[ORM\ManyToOne(inversedBy: 'voyages')]
    private ?User $User = null;

    #[ORM\OneToMany(targetEntity: Programme::class, mappedBy: 'Voyage')]
    private Collection $programmes;

    #[ORM\OneToMany(targetEntity: ReservationVoyage::class, mappedBy: 'Voyage')]
    private Collection $reservationVoyages;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La destination est requise")]

    private ?string $destination = null;

    public function __construct()
    {
        $this->programmes = new ArrayCollection();
        $this->reservationVoyages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMois(): ?string
    {
        return $this->mois;
    }

    public function setMois(string $mois): static
    {
        $this->mois = $mois;

        return $this;
    }

    public function getAnnee(): ?int
{
    return $this->annee ;
}

public function setAnnee(\DateTimeInterface $annee): static
{
    $this->annee = $annee;
    return $this;
}

    public function getVilledepart(): ?string
    {
        return $this->villedepart;
    }

    public function setVilledepart(string $villedepart): static
    {
        $this->villedepart = $villedepart;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): static
    {
        $this->User = $User;

        return $this;
    }

    /**
     * @return Collection<int, Programme>
     */
    public function getProgrammes(): Collection
    {
        return $this->programmes;
    }

    public function addProgramme(Programme $programme): static
    {
        if (!$this->programmes->contains($programme)) {
            $this->programmes->add($programme);
            $programme->setVoyage($this);
        }

        return $this;
    }

    public function removeProgramme(Programme $programme): static
    {
        if ($this->programmes->removeElement($programme)) {
            // set the owning side to null (unless already changed)
            if ($programme->getVoyage() === $this) {
                $programme->setVoyage(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ReservationVoyage>
     */
    public function getReservationVoyages(): Collection
    {
        return $this->reservationVoyages;
    }

    public function addReservationVoyage(ReservationVoyage $reservationVoyage): static
    {
        if (!$this->reservationVoyages->contains($reservationVoyage)) {
            $this->reservationVoyages->add($reservationVoyage);
            $reservationVoyage->setVoyage($this);
        }

        return $this;
    }

    public function removeReservationVoyage(ReservationVoyage $reservationVoyage): static
    {
        if ($this->reservationVoyages->removeElement($reservationVoyage)) {
            // set the owning side to null (unless already changed)
            if ($reservationVoyage->getVoyage() === $this) {
                $reservationVoyage->setVoyage(null);
            }
        }

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): static
    {
        $this->destination = $destination;

        return $this;
    }
}
