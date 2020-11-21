<?php

namespace App\Entity;

use App\Repository\TravailleurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TravailleurRepository::class)
 */
class Travailleur
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
     * @ORM\Column(type="string", length=45)
     */
    private $Situation;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $Commune;

    /**
     * @ORM\Column(type="integer")
     */
    private $PostalCode;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $Adress;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumCaf;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumSecu;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $NumDossierMDPH;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $DateExpiMDPH;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $DateNaissance;

    /**
     * @ORM\Column(type="integer")
     */
    private $Telephone;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $Mail;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $DateEntreeEsat;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $DateSalariat;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $PersonneRessource;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $TauxIncap;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $NumImpotGouv;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $NumCPF;

    /**
     * @ORM\OneToMany(targetEntity=Atelier::class, mappedBy="idAtelier", orphanRemoval=true)
     */
    private $idAtelier;

    public function __construct()
    {
        $this->idAtelier = new ArrayCollection();
    }

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

    public function getSituation(): ?string
    {
        return $this->Situation;
    }

    public function setSituation(string $Situation): self
    {
        $this->Situation = $Situation;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->Commune;
    }

    public function setCommune(string $Commune): self
    {
        $this->Commune = $Commune;

        return $this;
    }

    public function getPostalCode(): ?int
    {
        return $this->PostalCode;
    }

    public function setPostalCode(int $PostalCode): self
    {
        $this->PostalCode = $PostalCode;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->Adress;
    }

    public function setAdress(string $Adress): self
    {
        $this->Adress = $Adress;

        return $this;
    }

    public function getNumCaf(): ?int
    {
        return $this->NumCaf;
    }

    public function setNumCaf(int $NumCaf): self
    {
        $this->NumCaf = $NumCaf;

        return $this;
    }

    public function getNumSecu(): ?int
    {
        return $this->NumSecu;
    }

    public function setNumSecu(int $NumSecu): self
    {
        $this->NumSecu = $NumSecu;

        return $this;
    }

    public function getNumDossierMDPH(): ?int
    {
        return $this->NumDossierMDPH;
    }

    public function setNumDossierMDPH(int $NumDossierMDPH): self
    {
        $this->NumDossierMDPH = $NumDossierMDPH;

        return $this;
    }

    public function getDateExpiMDPH(): ?\DateTimeInterface
    {
        return $this->DateExpiMDPH;
    }

    public function setDateExpiMDPH(\DateTimeInterface $DateExpiMDPH): self
    {
        $this->DateExpiMDPH = $DateExpiMDPH;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->DateNaissance;
    }

    public function setDateNaissance(?\DateTimeInterface $DateNaissance): self
    {
        $this->DateNaissance = $DateNaissance;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->Telephone;
    }

    public function setTelephone(?int $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->Mail;
    }

    public function setMail(?string $Mail): self
    {
        $this->Mail = $Mail;

        return $this;
    }

    public function getDateEntreeEsat(): ?\DateTimeInterface
    {
        return $this->DateEntreeEsat;
    }

    public function setDateEntreeEsat(?\DateTimeInterface $DateEntreeEsat): self
    {
        $this->DateEntreeEsat = $DateEntreeEsat;

        return $this;
    }

    public function getDateSalariat(): ?\DateTimeInterface
    {
        return $this->DateSalariat;
    }

    public function setDateSalariat(?\DateTimeInterface $DateSalariat): self
    {
        $this->DateSalariat = $DateSalariat;

        return $this;
    }

    public function getPersonneRessource(): ?string
    {
        return $this->PersonneRessource;
    }

    public function setPersonneRessource(?string $PersonneRessource): self
    {
        $this->PersonneRessource = $PersonneRessource;

        return $this;
    }

    public function getTauxIncap(): ?int
    {
        return $this->TauxIncap;
    }

    public function setTauxIncap(?int $TauxIncap): self
    {
        $this->TauxIncap = $TauxIncap;

        return $this;
    }

    public function getNumImpotGouv(): ?int
    {
        return $this->NumImpotGouv;
    }

    public function setNumImpotGouv(int $NumImpotGouv): self
    {
        $this->NumImpotGouv = $NumImpotGouv;

        return $this;
    }

    public function getNumCPF(): ?int
    {
        return $this->NumCPF;
    }

    public function setNumCPF(?int $NumCPF): self
    {
        $this->NumCPF = $NumCPF;

        return $this;
    }

    /**
     * @return Collection|Atelier[]
     */
    public function getIdAtelier(): Collection
    {
        return $this->idAtelier;
    }

    public function addIdAtelier(Atelier $idAtelier): self
    {
        if (!$this->idAtelier->contains($idAtelier)) {
            $this->idAtelier[] = $idAtelier;
            $idAtelier->setIdAtelier($this);
        }

        return $this;
    }

    public function removeIdAtelier(Atelier $idAtelier): self
    {
        if ($this->idAtelier->removeElement($idAtelier)) {
            // set the owning side to null (unless already changed)
            if ($idAtelier->getIdAtelier() === $this) {
                $idAtelier->setIdAtelier(null);
            }
        }

        return $this;
    }
}
