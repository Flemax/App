<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $Username;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $Password;

    /**
     * @ORM\ManyToOne(targetEntity=Roles::class, inversedBy="idUsers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUsers;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(string $Username): self
    {
        $this->Username = $Username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getIdUsers(): ?Roles
    {
        return $this->idUsers;
    }

    public function setIdUsers(?Roles $idUsers): self
    {
        $this->idUsers = $idUsers;

        return $this;
    }

}
