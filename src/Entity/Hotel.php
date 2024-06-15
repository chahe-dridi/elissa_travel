<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use App\Repository\HotelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HotelRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'Cet email est déjà utilisé.')]
class Hotel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank(message: 'Le nom de l\'hôtel ne peut pas être vide.')]
    #[Assert\Type(type: "string", message: 'Le nom de l\'hôtel doit être une chaîne de caractères.')]
    #[ORM\Column(length: 255)]
    private ?string $nomHotel = null;
    
    #[Assert\NotBlank(message: 'Le lieu ne peut pas être vide.')]
    #[Assert\Type(type: "string", message: 'Le lieu doit être une chaîne de caractères.')]
    #[ORM\Column(length: 255)]
    private ?string $lieu = null;
    
    #[Assert\NotBlank(message: 'Le numéro de téléphone ne peut pas être vide.')]
    #[Assert\Length(max: 8, maxMessage: 'Le numéro de téléphone ne peut pas dépasser {{ limit }} caractères.')]
    #[Assert\Positive(message: 'Le numéro de téléphone doit être un nombre positif.')]
    #[ORM\Column(length: 8)]
    private ?string $telHotel = null;
    
    #[Assert\NotBlank(message: 'L\'adresse email ne peut pas être vide.')]
    #[Assert\Email(message: 'L\'adresse email doit être valide.')]
    #[ORM\Column(length: 255)]
    private ?string $email = null;
    
    #[Assert\NotBlank(message: 'La description de l\'hôtel ne peut pas être vide.')]
    #[Assert\Type(type: "string", message: 'La description de l\'hôtel doit être une chaîne de caractères.')]
    #[ORM\Column(length: 255)]
    private ?string $discHotel = null;

    #[Assert\NotBlank(message: 'L\'état de l\'hôtel ne peut pas être vide.')]
    #[Assert\Type(type: "string", message: 'L\'état de l\'hôtel doit être une chaîne de caractères.')]
    #[ORM\Column(length: 255)]
    private ?string $etatHotel = null;

    #[Assert\NotBlank(message: 'Le nombre de chambres ne peut pas être vide.')]
    #[Assert\Positive(message: 'Le nombre de chambres doit être un nombre positif.')]
    #[ORM\Column(type: Types::INTEGER)]
    private ?int $nbChambre = null;

    #[ORM\OneToMany(targetEntity: Chambre::class, mappedBy: 'Hotel')]
    private Collection $chambres;

    #[ORM\OneToMany(targetEntity: ReservationHotel::class, mappedBy: 'Hotel')]
    private Collection $reservationHotels;

    #[ORM\ManyToOne(inversedBy: 'hotels')]
    private ?User $User = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    // Getter method for the image property
    public function getImage(): ?string
    {
        return $this->image;
    }

    // Setter method for the image property
    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

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
}