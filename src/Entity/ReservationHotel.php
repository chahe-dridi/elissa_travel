<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReservationHotelRepository;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: ReservationHotelRepository::class)]
class ReservationHotel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'reservationHotels')]
    private ?User $User = null;

    #[ORM\ManyToOne(inversedBy: 'reservationHotels')]
    private ?Hotel $Hotel = null;

    #[ORM\Column(nullable: true)]
    private ?float $PrixTT = null;
    
     
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateArrive = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDepart = null;

    #[ORM\ManyToOne]
    private ?Payment $Payment = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $preNom = null;

    #[ORM\Column(length: 255)]
    private ?string $Distination = null;

    #[ORM\Column(length: 255)]
    private ?string $ChambrE = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getHotel(): ?Hotel
    {
        return $this->Hotel;
    }

    public function setHotel(?Hotel $Hotel): static
    {
        $this->Hotel = $Hotel;

        return $this;
    }

    public function getPrixTT(): ?float
    {
        return $this->PrixTT;
    }

    public function setPrixTT(float $PrixTT): static
    {
        $this->PrixTT = $PrixTT;

        return $this;
    }

    public function getPayment(): ?Payment
    {
        return $this->Payment;
    }

    public function setPayment(?Payment $Payment): static
    {
        $this->Payment = $Payment;

        return $this;
    }

    public function getdateArrive(): ?\DateTimeInterface
    {
        return $this->dateArrive;
    }

    public function setdateArrive(?\DateTimeInterface $dateArrive): self
    {
        $this->dateArrive = $dateArrive;

        return $this;
    }

    public function getdateDepart(): ?\DateTimeInterface
    {
        return $this->dateDepart;
    }

    public function setdateDepart(?\DateTimeInterface $dateDepart): self
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getnom(): ?string
    {
        return $this->nom;
    }

    public function setnom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getpreNom(): ?string
    {
        return $this->preNom;
    }

    public function setpreNom(string $preNom): static
    {
        $this->preNom = $preNom;

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

    public function getDistination(): ?string
    {
        return $this->Distination;
    }

    public function setDistination(string $Distination): static
    {
        $this->Distination = $Distination;

        return $this;
    }


    public function getChambrE(): ?string
    {
        return $this->ChambrE;
    }

    public function setChambrE(string $ChambrE): static
    {
        $this->ChambrE = $ChambrE;

        return $this;
    }


    private $Chambree;

    // Your other methods

    public function getChambree(): ?Chambre
    {
        return $this->Chambree;
    }

    public function setChambree(?Chambre $Chambree): self
    {
        $this->Chambree = $Chambree;

        return $this;
    }

}

