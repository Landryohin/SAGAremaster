<?php

namespace App\Entity;

use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AffectationsRepository;

#[ORM\Entity(repositoryClass: AffectationsRepository::class)]
class Affectations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?string $Envoyeur = null;

    #[ORM\ManyToOne(inversedBy: 'Affectations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Documents $Document = null;

    #[ORM\Column(nullable: true)]
    private ?string $Receveur = null;

    #[ORM\ManyToOne(inversedBy: 'AffectationAgents')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Users $Agent = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_Affectation_at = null;

    #[ORM\Column(nullable: true)]
    private ?bool $status = false;

    #[ORM\ManyToOne(inversedBy: 'affectations')]
    #[ORM\JoinColumn(nullable: true)]

    private ?Users $Owner = null;

    #[ORM\ManyToOne(inversedBy: 'affectations')]
    private ?Postes $PosteOwner = null;

    public function __construct()
    {
        $this->Date_Affectation_at = new DateTimeImmutable('now',null);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnvoyeur(): ?string
    {
        return $this->Envoyeur;
    }

    public function setEnvoyeur(?string $Envoyeur): self
    {
        $this->Envoyeur = $Envoyeur;

        return $this;
    }

    public function getDocument(): ?Documents
    {
        return $this->Document;
    }

    public function setDocument(?Documents $Document): self
    {
        $this->Document = $Document;

        return $this;
    }

    public function getReceveur(): ?string
    {
        return $this->Receveur;
    }

    public function setReceveur(?string $Receveur): self
    {
        $this->Receveur = $Receveur;

        return $this;
    }

    public function getDateAffectationAt(): ?\DateTimeInterface
    {
        return $this->Date_Affectation_at;
    }

    public function setDateAffectationAt(?\DateTimeInterface $Date_Affectation_at): self
    {
        $this->Date_Affectation_at = $Date_Affectation_at;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
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

    /**
     * Get the value of Agent
     */ 
    public function getAgent(): ?Users
    {
        return $this->Agent;
    }

    /**
     * Set the value of Agent
     *
     * @return  self
     */ 
    public function setAgent(?Users $Agent): self
    {
        $this->Agent = $Agent;

        return $this;
    }

    public function getPosteOwner(): ?Postes
    {
        return $this->PosteOwner;
    }

    public function setPosteOwner(?Postes $PosteOwner): self
    {
        $this->PosteOwner = $PosteOwner;

        return $this;
    }
}
