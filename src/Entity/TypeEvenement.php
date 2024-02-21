<?php

namespace App\Entity;

use App\Repository\TypeEvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TypeEvenementRepository::class)]
class TypeEvenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\Length(max: 20, maxMessage: "Le champ ne doit pas dépasser {{ limit }} caractères.")]
    #[Assert\NotBlank(message: "Type Evenement Name ne doit pas être vide.")]
    #[ORM\Column(length: 255)]
    private ?string $nomType = null;


    #[Assert\Length(max: 50, maxMessage: "Le champ ne doit pas dépasser {{ limit }} caractères.")]
    #[Assert\NotBlank(message: "TypeEvenement Description ne doit pas être vide.")]
    #[ORM\Column(length: 255)]
    private ?string $typeDescription = null;

    #[ORM\OneToMany(targetEntity: Event::class, mappedBy: 'TypeEvenement')]
    private Collection $events;

    public function __construct()
    {
        $this->events = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomType(): ?string
    {
        return $this->nomType;
    }

    public function setNomType(string $nomType): static
    {
        $this->nomType = $nomType;

        return $this;
    }

    public function getTypeDescription(): ?string
    {
        return $this->typeDescription;
    }

    public function setTypeDescription(string $typeDescription): static
    {
        $this->typeDescription = $typeDescription;

        return $this;
    }

    /**
     * @return Collection<int, Event>
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(Event $event): static
    {
        if (!$this->events->contains($event)) {
            $this->events->add($event);
            $event->setTypeEvenement($this);
        }

        return $this;
    }

    public function removeEvent(Event $event): static
    {
        if ($this->events->removeElement($event)) {
            // set the owning side to null (unless already changed)
            if ($event->getTypeEvenement() === $this) {
                $event->setTypeEvenement(null);
            }
        }

        return $this;
    }
}
