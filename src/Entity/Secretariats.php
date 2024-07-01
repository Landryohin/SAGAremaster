<?php

namespace App\Entity;

use App\Repository\SecretariatsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SecretariatsRepository::class)]
class Secretariats
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'secretariats')]
    private ?Directions $Direction = null;

    #[ORM\Column(length: 10)]
    private ?string $Secretaire = null;

    #[ORM\Column(length: 25)]
    private ?string $Type = "Direction";

    #[ORM\ManyToOne(inversedBy: 'secretariatOwners')]
    private ?Users $Owner = null;

    #[ORM\Column(nullable: true)]
    private ?bool $status = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSecretaire(): ?string
    {
        return $this->Secretaire;
    }

    public function setSecretaire(?string $Secretaire): self
    {
        $this->Secretaire = $Secretaire;

        return $this;
    }


    /**
     * Get the value of Type
     */ 
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Set the value of Type
     *
     * @return  self
     */ 
    public function setType($Type)
    {
        $this->Type = $Type;

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

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
    {
        $this->status = $status;

        return $this;
    }
}
