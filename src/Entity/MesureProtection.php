<?php

namespace App\Entity;

use App\Repository\MesureProtectionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MesureProtectionRepository::class)
 */
class MesureProtection
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
     * @ORM\ManyToOne(targetEntity=Travailleur::class, inversedBy="idMesureProtection")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idMesureProtection;

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

    public function getIdMesureProtection(): ?Travailleur
    {
        return $this->idMesureProtection;
    }

    public function setIdMesureProtection(?Travailleur $idMesureProtection): self
    {
        $this->idMesureProtection = $idMesureProtection;

        return $this;
    }
}
