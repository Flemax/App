<?php

namespace App\Entity;

use App\Repository\ChefServiceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChefServiceRepository::class)
 */
class ChefService
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
     * @ORM\ManyToOne(targetEntity=Travailleur::class, inversedBy="idChefService")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idChefService;

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

    public function getIdChefService(): ?Travailleur
    {
        return $this->idChefService;
    }

    public function setIdChefService(?Travailleur $idChefService): self
    {
        $this->idChefService = $idChefService;

        return $this;
    }
}
