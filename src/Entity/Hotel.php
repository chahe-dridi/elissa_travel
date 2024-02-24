<?php

namespace App\Entity;

use App\Repository\HotelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HotelRepository::class)]
class Hotel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\Positive(message: "nbrTicket Evenement doit être positive.")]
    #[Assert\NotBlank(message: "nbrTicket Evenement ne doit pas être vide.")]
    #[ORM\Column(length: 255)]
    private ?string $nomHotel = null;
    
    #[Assert\Positive(message: "nbrTicket Evenement doit être positive.")]
    #[Assert\NotBlank(message: "nbrTicket Evenement ne doit pas être vide.")]
    #[ORM\Column(length: 255)]
    private ?string $lieu = null;
    

    #[Assert\Positive(message: "nbrTicket Evenement doit être positive.")]
    #[Assert\NotBlank(message: "nbrTicket Evenement ne doit pas être vide.")]
    #[ORM\Column(length: 255)]
    private ?string $telHotel = null;

    #[Assert\Positive(message: "nbrTicket Evenement doit être positive.")]
    #[Assert\NotBlank(message: "nbrTicket Evenement ne doit pas être vide.")]
    #[ORM\Column(length: 255)]
    private ?string $email = null;
    

    #[Assert\Positive(message: "nbrTicket Evenement doit être positive.")]
    #[Assert\NotBlank(message: "nbrTicket Evenement ne doit pas être vide.")]
    #[ORM\Column(length: 255)]
    private ?string $discHotel = null;


    #[ORM\Column(length: 255)]
    private ?string $etatHotel = null;

    #[ORM\Column]
    private ?int $nbChambre = null;

    #[ORM\OneToMany(targetEntity: Chambre::class, mappedBy: 'Hotel')]
    private Collection $chambres;

    #[ORM\OneToMany(targetEntity: ReservationHotel::class, mappedBy: 'Hotel')]
    private Collection $reservationHotels;

    #[ORM\ManyToOne(inversedBy: 'hotels')]
    private ?User $User = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    public function __construct()
    {
        $this->chambres = new ArrayCollection();
        $this->reservationHotels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomHotel(): ?string
    {
        return $this->nomHotel;
    }

    public function setNomHotel(string $nomHotel): static
    {
        $this->nomHotel = $nomHotel;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getTelHotel(): ?string
    {
        return $this->telHotel;
    }

    public function setTelHotel(string $telHotel): static
    {
        $this->telHotel = $telHotel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getDiscHotel(): ?string
    {
        return $this->discHotel;
    }

    public function setDiscHotel(string $discHotel): static
    {
        $this->discHotel = $discHotel;

        return $this;
    }

    public function getEtatHotel(): ?string
    {
        return $this->etatHotel;
    }

    public function setEtatHotel(string $etatHotel): static
    {
        $this->etatHotel = $etatHotel;

        return $this;
    }

    public function getNbChambre(): ?int
    {
        return $this->nbChambre;
    }

    public function setNbChambre(int $nbChambre): static
    {
        $this->nbChambre = $nbChambre;

        return $this;
    }

    /**
     * @return Collection<int, Chambre>
     */
    public function getChambres(): Collection
    {
        return $this->chambres;
    }

    public function addChambre(Chambre $chambre): static
    {
        if (!$this->chambres->contains($chambre)) {
            $this->chambres->add($chambre);
            $chambre->setHotel($this);
        }

        return $this;
    }

    public function removeChambre(Chambre $chambre): static
    {
        if ($this->chambres->removeElement($chambre)) {
            // set the owning side to null (unless already changed)
            if ($chambre->getHotel() === $this) {
                $chambre->setHotel(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ReservationHotel>
     */
    public function getReservationHotels(): Collection
    {
        return $this->reservationHotels;
    }

    public function addReservationHotel(ReservationHotel $reservationHotel): static
    {
        if (!$this->reservationHotels->contains($reservationHotel)) {
            $this->reservationHotels->add($reservationHotel);
            $reservationHotel->setHotel($this);
        }

        return $this;
    }

    public function removeReservationHotel(ReservationHotel $reservationHotel): static
    {
        if ($this->reservationHotels->removeElement($reservationHotel)) {
            // set the owning side to null (unless already changed)
            if ($reservationHotel->getHotel() === $this) {
                $reservationHotel->setHotel(null);
            }
        }

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }
}
