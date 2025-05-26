<?php

namespace App\Entity;

use App\Repository\ProvenancesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProvenancesRepository::class)]
class Provenances
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Structure = null;

    #[ORM\Column(nullable: true, length: 10)]
    private ?int $Numero = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateEnregistrement = null;

    #[ORM\ManyToOne(inversedBy: 'provenances')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Documents $Document = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStructure(): ?string
    {
        return $this->Structure;
    }

    public function setStructure(string $Structure): self
    {
        $this->Structure = $Structure;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->Numero;
    }

    public function setNumero(?string $Numero): self
    {
        $this->Numero = $Numero;

        return $this;
    }

    public function getDateEnregistrement(): ?\DateTimeInterface
    {
        return $this->DateEnregistrement;
    }

    public function setDateEnregistrement(\DateTimeInterface $DateEnregistrement): self
    {
        $this->DateEnregistrement = $DateEnregistrement;

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
}
