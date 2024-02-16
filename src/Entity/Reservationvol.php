<?php

namespace App\Entity;

use App\Repository\ReservationvolRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationvolRepository::class)]
class Reservationvol
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $total_price = null;

    #[ORM\ManyToOne]
    private ?vol $vol = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotalPrice(): ?float
    {
        return $this->total_price;
    }

    public function setTotalPrice(float $total_price): static
    {
        $this->total_price = $total_price;

        return $this;
    }

    public function getVol(): ?vol
    {
        return $this->vol;
    }

    public function setVol(?vol $vol): static
    {
        $this->vol = $vol;

        return $this;
    }
}
