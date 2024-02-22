<?php

namespace App\Entity;

use App\Repository\ReservationvolRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReservationvolRepository::class)]
class Reservationvol
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'float')]
    #[Assert\NotBlank]
    private ?float $total_price = null;
    
    #[ORM\ManyToOne]
    #[Assert\NotBlank]
    private ?Vol $vol = null;

    #[ORM\ManyToOne]
    #[Assert\NotBlank]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;


    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Regex('/^[a-zA-Z\s]+$/')]
    private ?string $payment_method = null;
    
   
    

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

    public function getVol(): ?Vol
    {
        return $this->vol;
    }

    public function setVol(?Vol $vol): static
    {
        $this->vol = $vol;

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

   

   
    

    public function getPaymentMethod(): ?string
    {
        return $this->payment_method;
    }

    public function setPaymentMethod(string $payment_method): static
    {
        $this->payment_method = $payment_method;

        return $this;
    }

    public function __toString(): string
    {
        // Retourne une représentation string de l'objet, par exemple le nom de l'aéroport
        return $this->id;
    }
}
