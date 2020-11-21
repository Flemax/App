<?php

namespace App\Entity;

use App\Repository\RolesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RolesRepository::class)
 */
class Roles
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
    private $Name;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $Description;

    /**
     * @ORM\OneToMany(targetEntity=Users::class, mappedBy="idUsers", orphanRemoval=true)
     */
    private $idUsers;

    public function __construct()
    {
        $this->idUsers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * @return Collection|Users[]
     */
    public function getIdUsers(): Collection
    {
        return $this->idUsers;
    }

    public function addIdUser(Users $idUser): self
    {
        if (!$this->idUsers->contains($idUser)) {
            $this->idUsers[] = $idUser;
            $idUser->setIdUsers($this);
        }

        return $this;
    }

    public function removeIdUser(Users $idUser): self
    {
        if ($this->idUsers->removeElement($idUser)) {
            // set the owning side to null (unless already changed)
            if ($idUser->getIdUsers() === $this) {
                $idUser->setIdUsers(null);
            }
        }

        return $this;
    }
}
