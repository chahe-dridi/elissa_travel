<?php

namespace App\Entity;


use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Please enter an email')]
    #[Assert\Email(message: 'The email "{{ value }}" is not a valid email.')]
    private ?string $email = null;
    #[ORM\Column]
    private array $roles = [];
    

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Please enter a username')]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Please enter a password')]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $reset_token = null;
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Please enter a first name')]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Please enter a last name')]
    private ?string $lastName = null;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $isVerified = false;

    
    

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

    
    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }
    

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getResetToken(): ?string
    {
        return $this->reset_token;
    }

    public function setResetToken(string $reset_token): static
    {
        $this->reset_token = $reset_token;

        return $this;
    }
    public function getSalt(): ?string
    {
        // you might not need this method if using bcrypt or a modern hashing algorithm
        return null;
    }
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }
    public function getRoleTitle()
    {
        if(in_array("ROLE_ADMIN", $this->roles)) return "Administrateur";
        else return "Utilisateur";
    }

    public function eraseCredentials() : void
    {
        // If you store any temporary, sensitive data on the user, erase it here
        // This method is called after the user's password has been validated and the 
        // data is no longer needed
    }

    public function getUserIdentifier(): string
    {
        // Return a unique identifier for the user (e.g., username, email)
        return $this->email;
    }
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }
    public function getFullName()
    {
        return "{$this->firstName} {$this->lastName}";
    }

    
    public function __toString(): string
    {
        // Retourne une représentation string de l'objet, par exemple le nom de l'aéroport
        return $this->id;
    }
}
