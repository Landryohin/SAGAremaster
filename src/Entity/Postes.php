<?php

namespace App\Entity;

use DateTimeImmutable;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PostesRepository;

#[ORM\Entity(repositoryClass: PostesRepository::class)]
class Postes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 25)]
    private ?string $Niveau = null;

    #[ORM\Column(length: 15)]
    private ?string $Fonction = null;

    #[ORM\ManyToOne(inversedBy: 'postes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $Agent = null;

    #[ORM\ManyToOne(inversedBy: 'posteOwners')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $Owner = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?DateTimeInterface $DateDeb = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?DateTimeInterface $Poste_At = null;


    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?DateTimeInterface $DateFin = null;

    #[ORM\Column]
    private ?bool $status = true;

    #[ORM\Column(length: 25, nullable: true)]
    private ?string $Type = "PERMANENT";

    #[ORM\OneToMany(mappedBy: 'PosteOwner', targetEntity: Documents::class)]
    private Collection $documents;

    #[ORM\OneToMany(mappedBy: 'PosteOwner', targetEntity: Affectations::class)]
    private Collection $affectations;

    public function __construct(){
        $this->Poste_At = new DateTimeImmutable('now',null);
        $this->DateDeb = new DateTimeImmutable('now',null);
        $this->documents = new ArrayCollection();
        $this->affectations = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNiveau(): ?string
    {
        return $this->Niveau;
    }

    public function setNiveau(string $Niveau): self
    {
        $this->Niveau = $Niveau;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->Fonction;
    }

    public function setFonction(string $Fonction): self
    {
        $this->Fonction = $Fonction;

        return $this;
    }

    public function getAgent(): ?Users
    {
        return $this->Agent;
    }

    public function setAgent(?Users $Agent): self
    {
        $this->Agent = $Agent;

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

    public function getDateDeb(): ?DateTimeInterface
    {
        return $this->DateDeb;
    }

    public function setDateDeb(DateTimeInterface $DateDeb): self
    {
        $this->DateDeb = $DateDeb;

        return $this;
    }

    public function getDateFin(): ?DateTimeInterface
    {
        return $this->DateFin;
    }

    public function setDateFin(?DateTimeInterface $DateFin): self
    {
        $this->DateFin = $DateFin;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

	/**
	 * @return DateTimeInterface|null
	 */
	public function getPoste_At(): ?DateTimeInterface {
                                             		return $this->Poste_At;
                                             	}

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(?string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    /**
     * @return Collection<int, Documents>
     */
    public function getDocuments(): Collection
    {
        return $this->documents;
    }

    public function addDocument(Documents $document): self
    {
        if (!$this->documents->contains($document)) {
            $this->documents->add($document);
            $document->setPosteOwner($this);
        }

        return $this;
    }

    public function removeDocument(Documents $document): self
    {
        if ($this->documents->removeElement($document)) {
            // set the owning side to null (unless already changed)
            if ($document->getPosteOwner() === $this) {
                $document->setPosteOwner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Affectations>
     */
    public function getAffectations(): Collection
    {
        return $this->affectations;
    }

    public function addAffectation(Affectations $affectation): self
    {
        if (!$this->affectations->contains($affectation)) {
            $this->affectations->add($affectation);
            $affectation->setPosteOwner($this);
        }

        return $this;
    }

    public function removeAffectation(Affectations $affectation): self
    {
        if ($this->affectations->removeElement($affectation)) {
            // set the owning side to null (unless already changed)
            if ($affectation->getPosteOwner() === $this) {
                $affectation->setPosteOwner(null);
            }
        }

        return $this;
    }

	
}
