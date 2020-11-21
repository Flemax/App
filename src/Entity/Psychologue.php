<?php

namespace App\Entity;

use App\Repository\PsychologueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PsychologueRepository::class)
 */
class Psychologue
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
    private $Firstname;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $Lastname;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $Description;

    /**
     * @ORM\ManyToOne(targetEntity=Travailleur::class, inversedBy="idPsychologue")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idPsychologue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->Firstname;
    }

    public function setFirstname(string $Firstname): self
    {
        $this->Firstname = $Firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->Lastname;
    }

    public function setLastname(string $Lastname): self
    {
        $this->Lastname = $Lastname;

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

    public function getIdPsychologue(): ?Travailleur
    {
        return $this->idPsychologue;
    }

    public function setIdPsychologue(?Travailleur $idPsychologue): self
    {
        $this->idPsychologue = $idPsychologue;

        return $this;
    }
}
