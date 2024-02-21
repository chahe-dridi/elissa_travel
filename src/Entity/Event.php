<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank(message: "Nom Evenement ne doit pas être vide.")]
    #[ORM\Column(length: 255)]
    private ?string $NomEvent = null;

    #[Assert\NotBlank(message: "Adresse Evenement ne doit pas être vide.")]
    #[ORM\Column(length: 255)]
    private ?string $AdresseEvent = null;



    #[Assert\Positive(message: "nbrTicket Evenement doit être positive.")]
    #[Assert\NotBlank(message: "nbrTicket Evenement ne doit pas être vide.")]
    #[ORM\Column]
    private ?int $nbrticketsdispo = null;

    #[Assert\NotBlank(message: "Date Debut Evenement ne doit pas être vide.")]
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datedebutEvent = null;

    #[Assert\NotBlank(message: "Date FIn Evenement ne doit pas être vide.")]
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datefinevent = null;
    #[Assert\Positive(message: "Prix Entre Evenement doit être positive.")]
    #[Assert\NotBlank(message: "Prix Entre Evenement ne doit pas être vide.")]
    #[ORM\Column]
    private ?int $prixentre = null;

    #[Assert\NotBlank(message: "Image Evenement ne doit pas être vide.")]
    #[ORM\Column(length: 255)]
    private ?string $imageevent = null;

    #[Assert\NotBlank(message: "Type Evenement ne doit pas être vide.")]
    #[ORM\ManyToOne(inversedBy: 'events')]
    private ?TypeEvenement $TypeEvenement = null;

    #[ORM\ManyToOne(inversedBy: 'events')]
    private ?User $User = null;

    #[ORM\OneToMany(targetEntity: ReservationEvent::class, mappedBy: 'Event')]
    private Collection $reservationEvents;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEvent(): ?string
    {
        return $this->NomEvent;
    }

    public function setNomEvent(string $NomEvent): static
    {
        $this->NomEvent = $NomEvent;

        return $this;
    }

    public function getAdresseEvent(): ?string
    {
        return $this->AdresseEvent;
    }

    public function setAdresseEvent(string $AdresseEvent): static
    {
        $this->AdresseEvent = $AdresseEvent;

        return $this;
    }

 

    public function getNbrticketsdispo(): ?int
    {
        return $this->nbrticketsdispo;
    }

    public function setNbrticketsdispo(int $nbrticketsdispo): static
    {
        $this->nbrticketsdispo = $nbrticketsdispo;

        return $this;
    }

    public function getDatedebutEvent(): ?\DateTimeInterface
    {
        return $this->datedebutEvent;
    }

    public function setDatedebutEvent(\DateTimeInterface $datedebutEvent): static
    {
        $this->datedebutEvent = $datedebutEvent;

        return $this;
    }
    public function __construct()
{
    
        $this->datefinevent = new \DateTimeImmutable(); 
        $this->datedebutEvent = new \DateTimeImmutable();
        $this->reservationEvents = new ArrayCollection(); 
    
}


    public function getDatefinevent(): ?\DateTimeInterface
    {
        return $this->datefinevent;
    }

    public function setDatefinevent(\DateTimeInterface $datefinevent): static
    {
        $this->datefinevent = $datefinevent;

        return $this;
    }

    public function getPrixentre(): ?int
    {
        return $this->prixentre;
    }

    public function setPrixentre(int $prixentre): static
    {
        $this->prixentre = $prixentre;

        return $this;
    }

    public function getImageevent(): ?string
    {
        return $this->imageevent;
    }
    

    public function setImageevent(string $imageevent): static
    {
        $this->imageevent = $imageevent;

        return $this;
    }

    public function getTypeEvenement(): ?TypeEvenement
    {
        return $this->TypeEvenement;
    }

    public function setTypeEvenement(?TypeEvenement $TypeEvenement): static
    {
        $this->TypeEvenement = $TypeEvenement;

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
     * @return Collection<int, ReservationEvent>
     */
    public function getReservationEvents(): Collection
    {
        return $this->reservationEvents;
    }

    public function addReservationEvent(ReservationEvent $reservationEvent): static
    {
        if (!$this->reservationEvents->contains($reservationEvent)) {
            $this->reservationEvents->add($reservationEvent);
            $reservationEvent->setEvent($this);
        }

        return $this;
    }

    public function removeReservationEvent(ReservationEvent $reservationEvent): static
    {
        if ($this->reservationEvents->removeElement($reservationEvent)) {
            // set the owning side to null (unless already changed)
            if ($reservationEvent->getEvent() === $this) {
                $reservationEvent->setEvent(null);
            }
        }

        return $this;
    }
}
