<?php

namespace App\Entity;

use App\Repository\MoniteurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MoniteurRepository::class)
 */
class Moniteur
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
     * @ORM\Column(type="string", length=45)
     */
    private $Lastname;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $Description;

    /**
     * @ORM\ManyToOne(targetEntity=Travailleur::class, inversedBy="idMoniteur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idMoniteur;

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

    public function getIdMoniteur(): ?Travailleur
    {
        return $this->idMoniteur;
    }

    public function setIdMoniteur(?Travailleur $idMoniteur): self
    {
        $this->idMoniteur = $idMoniteur;

        return $this;
    }
}
