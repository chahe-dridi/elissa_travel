<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column]
    private ?int $numero = null;

    #[ORM\Column(length: 255)]
    private ?string $role = null;

    #[ORM\Column(length: 255)]
    private ?string $sexe = null;

    #[ORM\Column]
    private ?int $codedeverification = null;

    #[ORM\Column(length: 255)]
    private ?string $question = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse = null;

    #[ORM\Column(length: 255)]
    private ?string $nouveaumotdepasse = null;

    #[ORM\Column(length: 255)]
    private ?string $bloquenonbloque = null;

    #[ORM\Column(length: 255)]
    private ?string $raisondeblocage = null;

    #[ORM\OneToMany(targetEntity: Voyage::class, mappedBy: 'User')]
    private Collection $voyages;

    #[ORM\OneToMany(targetEntity: ReservationVoyage::class, mappedBy: 'User')]
    private Collection $reservationVoyages;

    #[ORM\OneToMany(targetEntity: ReservationHotel::class, mappedBy: 'User')]
    private Collection $reservationHotels;

    #[ORM\OneToMany(targetEntity: Hotel::class, mappedBy: 'User')]
    private Collection $hotels;

    public function __construct()
    {
        $this->voyages = new ArrayCollection();
        $this->reservationVoyages = new ArrayCollection();
        $this->reservationHotels = new ArrayCollection();
        $this->hotels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): static
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getCodedeverification(): ?int
    {
        return $this->codedeverification;
    }

    public function setCodedeverification(int $codedeverification): static
    {
        $this->codedeverification = $codedeverification;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): static
    {
        $this->question = $question;

        return $this;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): static
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getNouveaumotdepasse(): ?string
    {
        return $this->nouveaumotdepasse;
    }

    public function setNouveaumotdepasse(string $nouveaumotdepasse): static
    {
        $this->nouveaumotdepasse = $nouveaumotdepasse;

        return $this;
    }

    public function getBloquenonbloque(): ?string
    {
        return $this->bloquenonbloque;
    }

    public function setBloquenonbloque(string $bloquenonbloque): static
    {
        $this->bloquenonbloque = $bloquenonbloque;

        return $this;
    }

    public function getRaisondeblocage(): ?string
    {
        return $this->raisondeblocage;
    }

    public function setRaisondeblocage(string $raisondeblocage): static
    {
        $this->raisondeblocage = $raisondeblocage;

        return $this;
    }

    /**
     * @return Collection<int, Voyage>
     */
    public function getVoyages(): Collection
    {
        return $this->voyages;
    }

    public function addVoyage(Voyage $voyage): static
    {
        if (!$this->voyages->contains($voyage)) {
            $this->voyages->add($voyage);
            $voyage->setUser($this);
        }

        return $this;
    }

    public function removeVoyage(Voyage $voyage): static
    {
        if ($this->voyages->removeElement($voyage)) {
            // set the owning side to null (unless already changed)
            if ($voyage->getUser() === $this) {
                $voyage->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ReservationVoyage>
     */
    public function getReservationVoyages(): Collection
    {
        return $this->reservationVoyages;
    }

    public function addReservationVoyage(ReservationVoyage $reservationVoyage): static
    {
        if (!$this->reservationVoyages->contains($reservationVoyage)) {
            $this->reservationVoyages->add($reservationVoyage);
            $reservationVoyage->setUser($this);
        }

        return $this;
    }

    public function removeReservationVoyage(ReservationVoyage $reservationVoyage): static
    {
        if ($this->reservationVoyages->removeElement($reservationVoyage)) {
            // set the owning side to null (unless already changed)
            if ($reservationVoyage->getUser() === $this) {
                $reservationVoyage->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ReservationHotel>
     */
    public function getReservationHotels(): Collection
    {
        return $this->reservationHotels;
    }

    public function addReservationHotel(ReservationHotel $reservationHotel): static
    {
        if (!$this->reservationHotels->contains($reservationHotel)) {
            $this->reservationHotels->add($reservationHotel);
            $reservationHotel->setUser($this);
        }

        return $this;
    }

    public function removeReservationHotel(ReservationHotel $reservationHotel): static
    {
        if ($this->reservationHotels->removeElement($reservationHotel)) {
            // set the owning side to null (unless already changed)
            if ($reservationHotel->getUser() === $this) {
                $reservationHotel->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Hotel>
     */
    public function getHotels(): Collection
    {
        return $this->hotels;
    }

    public function addHotel(Hotel $hotel): static
    {
        if (!$this->hotels->contains($hotel)) {
            $this->hotels->add($hotel);
            $hotel->setUser($this);
        }

        return $this;
    }

    public function removeHotel(Hotel $hotel): static
    {
        if ($this->hotels->removeElement($hotel)) {
            // set the owning side to null (unless already changed)
            if ($hotel->getUser() === $this) {
                $hotel->setUser(null);
            }
        }

        return $this;
    }
}
