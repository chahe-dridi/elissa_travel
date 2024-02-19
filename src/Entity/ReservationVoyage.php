<?php

namespace App\Entity;

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
    private ?int $numberticket = null;

    #[ORM\ManyToOne(inversedBy: 'reservationVoyages')]
    private ?User $User = null;

    #[ORM\ManyToOne(inversedBy: 'reservationVoyages')]
    private ?Voyage $Voyage = null;

    #[ORM\ManyToOne]
    private ?Payment $payment = null;

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
        return $this->payment;
    }

    public function setPayment(?Payment $payment): static
    {
        $this->payment = $payment;

        return $this;
    }
}
