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

    /**
     * @ORM\OneToMany(targetEntity=ChefService::class, mappedBy="idChefService", orphanRemoval=true)
     */
    private $idChefService;

    /**
     * @ORM\OneToMany(targetEntity=Moniteur::class, mappedBy="idMoniteur", orphanRemoval=true)
     */
    private $idMoniteur;

    /**
     * @ORM\OneToMany(targetEntity=AssistanteSociale::class, mappedBy="idAssistantSociale", orphanRemoval=true)
     */
    private $idAssistanteSociale;

    /**
     * @ORM\OneToMany(targetEntity=Psychologue::class, mappedBy="idPsychologue", orphanRemoval=true)
     */
    private $idPsychologue;

    /**
     * @ORM\OneToMany(targetEntity=Infirmiere::class, mappedBy="idInfirmiere", orphanRemoval=true)
     */
    private $idInfirmiere;

    /**
     * @ORM\OneToMany(targetEntity=MesureProtection::class, mappedBy="idMesureProtection", orphanRemoval=true)
     */
    private $idMesureProtection;

    public function __construct()
    {
        $this->idAtelier = new ArrayCollection();
        $this->idChefService = new ArrayCollection();
        $this->idMoniteur = new ArrayCollection();
        $this->idAssistanteSociale = new ArrayCollection();
        $this->idPsychologue = new ArrayCollection();
        $this->idInfirmiere = new ArrayCollection();
        $this->idMesureProtection = new ArrayCollection();
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

    /**
     * @return Collection|ChefService[]
     */
    public function getIdChefService(): Collection
    {
        return $this->idChefService;
    }

    public function addIdChefService(ChefService $idChefService): self
    {
        if (!$this->idChefService->contains($idChefService)) {
            $this->idChefService[] = $idChefService;
            $idChefService->setIdChefService($this);
        }

        return $this;
    }

    public function removeIdChefService(ChefService $idChefService): self
    {
        if ($this->idChefService->removeElement($idChefService)) {
            // set the owning side to null (unless already changed)
            if ($idChefService->getIdChefService() === $this) {
                $idChefService->setIdChefService(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Moniteur[]
     */
    public function getIdMoniteur(): Collection
    {
        return $this->idMoniteur;
    }

    public function addIdMoniteur(Moniteur $idMoniteur): self
    {
        if (!$this->idMoniteur->contains($idMoniteur)) {
            $this->idMoniteur[] = $idMoniteur;
            $idMoniteur->setIdMoniteur($this);
        }

        return $this;
    }

    public function removeIdMoniteur(Moniteur $idMoniteur): self
    {
        if ($this->idMoniteur->removeElement($idMoniteur)) {
            // set the owning side to null (unless already changed)
            if ($idMoniteur->getIdMoniteur() === $this) {
                $idMoniteur->setIdMoniteur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|AssistanteSociale[]
     */
    public function getIdAssistanteSociale(): Collection
    {
        return $this->idAssistanteSociale;
    }

    public function addIdAssistanteSociale(AssistanteSociale $idAssistanteSociale): self
    {
        if (!$this->idAssistanteSociale->contains($idAssistanteSociale)) {
            $this->idAssistanteSociale[] = $idAssistanteSociale;
            $idAssistanteSociale->setIdAssistantSociale($this);
        }

        return $this;
    }

    public function removeIdAssistanteSociale(AssistanteSociale $idAssistanteSociale): self
    {
        if ($this->idAssistanteSociale->removeElement($idAssistanteSociale)) {
            // set the owning side to null (unless already changed)
            if ($idAssistanteSociale->getIdAssistantSociale() === $this) {
                $idAssistanteSociale->setIdAssistantSociale(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Psychologue[]
     */
    public function getIdPsychologue(): Collection
    {
        return $this->idPsychologue;
    }

    public function addIdPsychologue(Psychologue $idPsychologue): self
    {
        if (!$this->idPsychologue->contains($idPsychologue)) {
            $this->idPsychologue[] = $idPsychologue;
            $idPsychologue->setIdPsychologue($this);
        }

        return $this;
    }

    public function removeIdPsychologue(Psychologue $idPsychologue): self
    {
        if ($this->idPsychologue->removeElement($idPsychologue)) {
            // set the owning side to null (unless already changed)
            if ($idPsychologue->getIdPsychologue() === $this) {
                $idPsychologue->setIdPsychologue(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Infirmiere[]
     */
    public function getIdInfirmiere(): Collection
    {
        return $this->idInfirmiere;
    }

    public function addIdInfirmiere(Infirmiere $idInfirmiere): self
    {
        if (!$this->idInfirmiere->contains($idInfirmiere)) {
            $this->idInfirmiere[] = $idInfirmiere;
            $idInfirmiere->setIdInfirmiere($this);
        }

        return $this;
    }

    public function removeIdInfirmiere(Infirmiere $idInfirmiere): self
    {
        if ($this->idInfirmiere->removeElement($idInfirmiere)) {
            // set the owning side to null (unless already changed)
            if ($idInfirmiere->getIdInfirmiere() === $this) {
                $idInfirmiere->setIdInfirmiere(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MesureProtection[]
     */
    public function getIdMesureProtection(): Collection
    {
        return $this->idMesureProtection;
    }

    public function addIdMesureProtection(MesureProtection $idMesureProtection): self
    {
        if (!$this->idMesureProtection->contains($idMesureProtection)) {
            $this->idMesureProtection[] = $idMesureProtection;
            $idMesureProtection->setIdMesureProtection($this);
        }

        return $this;
    }

    public function removeIdMesureProtection(MesureProtection $idMesureProtection): self
    {
        if ($this->idMesureProtection->removeElement($idMesureProtection)) {
            // set the owning side to null (unless already changed)
            if ($idMesureProtection->getIdMesureProtection() === $this) {
                $idMesureProtection->setIdMesureProtection(null);
            }
        }

        return $this;
    }
}
