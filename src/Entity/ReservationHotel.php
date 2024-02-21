<?php

namespace App\Entity;

use App\Repository\ReservationHotelRepository;
use Doctrine\ORM\Mapping as ORM;

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

    #[ORM\Column]
    private ?float $PrixTT = null;

    #[ORM\ManyToOne]
    private ?Payment $Payment = null;

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
}
