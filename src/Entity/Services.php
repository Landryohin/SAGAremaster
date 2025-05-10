<?php

namespace App\Entity;

use App\Entity\Divisions;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ServicesRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: ServicesRepository::class)]
class Services
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10, unique: true)]
    private string $Code;

    #[ORM\Column(length: 255)]
    private ?string $Libelle = null;

    #[ORM\ManyToOne(inversedBy: 'Services')]
    private ?Directions $Direction = null;
    
    #[ORM\ManyToOne(inversedBy: 'services')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Users $Chef = null;

    #[ORM\OneToMany(mappedBy: 'Service', targetEntity: Divisions::class)]
    private Collection $Divisions;

    #[ORM\Column(length: 255)]
    #[ORM\JoinColumn(nullable: true)]
    private ?bool $status = true;

    #[ORM\ManyToOne(inversedBy: 'serviceOwners')]
    private ?Users $Owner = null;

    public function __construct()
    {
        $this->Divisions = new ArrayCollection();
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

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(string $Libelle): self
    {
        $this->Libelle = $Libelle;

        return $this;
    }

    public function getDirection(): ?Directions
    {
        return $this->Direction;
    }

    public function setDirection(?Directions $Direction): self
    {
        $this->Direction = $Direction;

        return $this;
    }
    
    public function __toString()
    {
        return (string) $this->Libelle;
    }

    public function getChef(): ?Users
    {
        return $this->Chef;
    }

    public function setChef(?Users $Chef): self
    {
        $this->Chef = $Chef;

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
     * @return Collection<int, Divisions>
     */
    public function getDivisions(): Collection
    {
        return $this->Divisions;
    }

    public function addDivisions(Divisions $Divisions): self
    {
        if (!$this->Divisions->contains($Divisions)) {
            $this->Divisions->add($Divisions);
            $Divisions->setService($this);
        }

        return $this;
    }

    public function removeDivisions(Divisions $Divisions): self
    {
        if ($this->Divisions->removeElement($Divisions)) {
            // set the owning side to null (unless already changed)
            if ($Divisions->getService() === $this) {
                $Divisions->setService(null);
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
}
