<?php

namespace App\Entity;

use App\Repository\DivisionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DivisionsRepository::class)]
class Divisions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10, unique: true)]
    private string $Code;

    #[ORM\Column(length: 255)]
    private ?string $Libelle = null;

    #[ORM\ManyToOne(inversedBy: 'Divisions')]
    #[ORM\JoinColumn(nullable: true)]
    private  ?Services $Service;

    #[ORM\ManyToOne(inversedBy: 'divisions')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Users $Chef = null;

    #[ORM\Column(length: 255)]
    #[ORM\JoinColumn(nullable: true)]
    private ?bool $status = true;

    #[ORM\ManyToOne(inversedBy: 'divisionOwners')]
    private ?Users $Owner = null;

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

    public function getService(): Services
    {
        return $this->Service;
    }

    public function setService(?Services $service): self
    {
        $this->Service = $service;

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
