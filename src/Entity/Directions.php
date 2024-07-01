<?php

namespace App\Entity;

use App\Repository\DirectionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DirectionsRepository::class)]
class Directions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10, unique: true)]
    private string $Code ;

    #[ORM\OneToMany(mappedBy: 'Direction', targetEntity: Services::class)]
    private Collection $Services;

    #[ORM\Column(length: 255)]
    private ?string $Libelle = null;

    #[ORM\ManyToOne(inversedBy: 'directions')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Users $Directeur = null;


    #[ORM\Column(length: 255)]
    #[ORM\JoinColumn(nullable: true)]
    private ?bool $status = true;

    #[ORM\OneToMany(mappedBy: 'Direction', targetEntity: Secretariats::class)]
    private Collection $secretariats;

    #[ORM\ManyToOne(inversedBy: 'directionOwners')]
    private ?Users $Owner = null;

    #[ORM\OneToMany(mappedBy: 'Direction', targetEntity: TypeDocuments::class)]
    private Collection $typeDocuments;

    public function __construct($code = null,$libelle=null)
    {
        $this->Code=$code;
        $this->Libelle = $libelle;
        $this->Services = new ArrayCollection();
        $this->secretariats = new ArrayCollection();
        $this->typeDocuments = new ArrayCollection();
    }

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->Code;
    }

    public function setCode(string $Code): self
    {
        $this->Code = $Code;

        return $this;
    }

    /**
     * @return Collection<int, Services>
     */
    public function getServices(): Collection
    {
        return $this->Services;
    }

    public function addServices(Services $Services): self
    {
        if (!$this->Services->contains($Services)) {
            $this->Services->add($Services);
            $Services->setDirection($this);
        }

        return $this;
    }

    public function removeServices(Services $Services): self
    {
        if ($this->Services->removeElement($Services)) {
            // set the owning side to null (unless already changed)
            if ($Services->getDirection() === $this) {
                $Services->setDirection(null);
            }
        }

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(string $Libelle): self
    {
        $this->Libelle = $Libelle;

        return $this;
    }

    public function __toString()
    {
        return (string) $this->Libelle;
    }

    public function getDirecteur(): ?Users
    {
        return $this->Directeur;
    }

    public function setDirecteur(?Users $Directeur): self
    {
        $this->Directeur = $Directeur;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Collection<int, Secretariats>
     */
    public function getSecretariats(): Collection
    {
        return $this->secretariats;
    }

    public function addSecretariat(Secretariats $secretariat): self
    {
        if (!$this->secretariats->contains($secretariat)) {
            $this->secretariats->add($secretariat);
            $secretariat->setDirection($this);
        }

        return $this;
    }

    public function removeSecretariat(Secretariats $secretariat): self
    {
        if ($this->secretariats->removeElement($secretariat)) {
            // set the owning side to null (unless already changed)
            if ($secretariat->getDirection() === $this) {
                $secretariat->setDirection(null);
            }
        }

        return $this;
    }

    public function getOwner(): ?Users
    {
        return $this->Owner;
    }

    public function setOwner(?Users $Owner): self
    {
        $this->Owner = $Owner;

        return $this;
    }

    /**
     * @return Collection<int, TypeDocuments>
     */
    public function getTypeDocuments(): Collection
    {
        return $this->typeDocuments;
    }

    public function addTypeDocument(TypeDocuments $typeDocument): self
    {
        if (!$this->typeDocuments->contains($typeDocument)) {
            $this->typeDocuments->add($typeDocument);
            $typeDocument->setDirection($this);
        }

        return $this;
    }

    public function removeTypeDocument(TypeDocuments $typeDocument): self
    {
        if ($this->typeDocuments->removeElement($typeDocument)) {
            // set the owning side to null (unless already changed)
            if ($typeDocument->getDirection() === $this) {
                $typeDocument->setDirection(null);
            }
        }

        return $this;
    }
}
