<?php

namespace App\Entity;



use App\Repository\VolclassRepository;

use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


use Doctrine\DBAL\Types\Types;

use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: VolclassRepository::class)]
class Volclass
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Class name should not be empty")]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z\s]+$/',
        message: "Class name should only contain letters and spaces"
    )]
    private ?string $class_name = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Description should not be empty")]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z\s]+$/',
        message: "Description should only contain letters and spaces"
    )]
    private ?string $description = null;

        #[ORM\Column(type: Types::FLOAT)]
    #[Assert\NotBlank(message: "Price should not be empty")]
    #[Assert\Positive(message: "Price should be a positive number")]
    #[Assert\Regex(
        pattern: '/^\d+(\.\d+)?$/',
        message: "Price should be a valid number"
    )]
    private ?float $price = null;

    #[ORM\Column(type: Types::INTEGER)]
    #[Assert\NotBlank(message: "Ticket number should not be empty")]
    #[Assert\Positive(message: "Ticket number should be a positive integer")]
    #[Assert\Regex(
        pattern: '/^\d+$/',
        message: "Ticket number should be a valid integer"
    )]
    private ?int $ticket_number = null;


    #[ORM\ManyToOne]
    #[Assert\NotBlank]
    private ?User $user = null;

   
    #[ORM\OneToMany(mappedBy: 'volclass', targetEntity: Vol::class, cascade: ["remove"])]
    #[Assert\NotBlank] 
     private $vols;

    public function __construct()
    {
        $this->vols = new ArrayCollection();
    }
    
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClassName(): ?string
    {
        return $this->class_name;
    }

    public function setClassName(string $class_name): static
    {
        $this->class_name = $class_name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getTicketNumber(): ?int
    {
        return $this->ticket_number;
    }

    public function setTicketNumber(int $ticket_number): static
    {
        $this->ticket_number = $ticket_number;

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
