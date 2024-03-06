<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use App\Repository\ReservationVoyageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationVoyageRepository::class)]
class ReservationVoyage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\Positive(message: 'Le nombre des tickets doit être un nombre positif.')]
    #[Assert\NotBlank(message: " vide !! ")]
      private ?int $numberticket = null;

    #[ORM\ManyToOne(inversedBy: 'reservationVoyages')]
    private ?User $User = null;

    #[ORM\ManyToOne(inversedBy: 'reservationVoyages')]
    private ?Voyage $Voyage = null;

    #[ORM\ManyToOne]
    private ?Payment $Payment = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: " vide !! ")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: " vide !! ")]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le type de logement de l'hôtel ne doit pas être vide")]
    #[Assert\Email( message :'L\'adresse e-mail "{{ value }}" n\'est pas valide.')]
    private ?string $email = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumberticket(): ?int
    {
        return $this->numberticket;
    }

    public function setNumberticket(int $numberticket): static
    {
        $this->numberticket = $numberticket;

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

    public function getVoyage(): ?Voyage
    {
        return $this->Voyage;
    }

    public function setVoyage(?Voyage $Voyage): static
    {
        $this->Voyage = $Voyage;

        return $this;
    }

    public function getPayment(): ?Payment
    {
        return $this->Payment;
    }

    public function setPayment(?payment $Payment): static
    {
        $this->Payment = $Payment;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

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
}
