<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Validator\Constraints as Assert;


use App\Repository\AirportRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AirportRepository::class)]
class Airport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

/*
    #[Assert\NotBlank(message:"code should be not empty")]
    #[Assert\Regex('/^[a-zA-Z\s]+$/')]
*/


    #[ORM\Column(length: 255)]
    /**
     * @Assert\NotBlank(message="should not be blank")
     */
    private ?string $code = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank (message:"code should be not empty")]
    #[Assert\Regex('/^[a-zA-Z\s]+$/' )  ]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"code should be not empty")]
    #[Assert\Regex('/^[a-zA-Z\s]+$/')]
    private ?string $city = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"code should be not empty")]
    #[Assert\Regex('/^[a-zA-Z\s]+$/')]
    private ?string $country = null;

    #[ORM\ManyToOne]
    #[Assert\NotBlank]
    private ?User $user = null;

    #[ORM\OneToMany(mappedBy: 'airport_depart', targetEntity: Vol::class, cascade: ["remove"])]
    private $departingFlights;

    #[ORM\OneToMany(mappedBy: 'airport_arrive', targetEntity: Vol::class, cascade: ["remove"])]
    private $arrivingFlights;

    public function __construct()
    {
        $this->departingFlights = new ArrayCollection();
        $this->arrivingFlights = new ArrayCollection();
    }
     

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = $country;

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

    public function __toString(): string
    {
        // Retourne une représentation string de l'objet, par exemple le nom de l'aéroport
        return $this->id;
    }


    
}
