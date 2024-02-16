<?php

namespace App\Entity;

use App\Repository\VolclassRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VolclassRepository::class)]
class Volclass
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $class_name = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column]
    private ?int $ticket_number = null;


    #[ORM\ManyToMany(targetEntity: Vol::class, mappedBy: 'classvol')]
    private Collection $no;

  
    public function __construct()
    {
        $this->no = new ArrayCollection();
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


    /**
     * @return Collection<int, Vol>
     */
    public function getNo(): Collection
    {
        return $this->no;
    }

    public function addNo(Vol $no): static
    {
        if (!$this->no->contains($no)) {
            $this->no->add($no);
            $no->addClassvol($this);
        }

        return $this;
    }

    public function removeNo(Vol $no): static
    {
        if ($this->no->removeElement($no)) {
            $no->removeClassvol($this);
        }

        return $this;
    }

   
}
