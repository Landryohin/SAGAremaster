<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\DocumentsRepository;
use DateTimeImmutable;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: DocumentsRepository::class)]
#[Vich\Uploadable]
class Documents
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'text')]
    private ?string $Objet = null;

    #[ORM\Column(length: 255)]
    private string $Chemin ;

    #[ORM\Column( length: 50)]
    private ?string $Mouvement = "ARRIVEE DIRECTE";

    #[ORM\Column]
    private ?DateTimeImmutable $Document_at = null;

    #[ORM\ManyToOne(inversedBy: 'documents')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Users $Owner = null;

    #[ORM\ManyToOne(inversedBy: 'documents')]
    private ?TypeDocuments $TypeDocument = null;

    #[ORM\Column(length: 255)]
    private ?bool $status = true;

    #[ORM\Column(length: 255)]
    private string $Structure;

    #[ORM\Column(length: 255)]
    private string $Reference ;

    #[ORM\Column(length: 10)]
    #[ORM\JoinColumn(nullable: true)]
    private ?int $NumeroEnregistrement = null ;

    #[ORM\Column(length: 15)]
    private string $Poste ;

    #[ORM\Column(length: 15)]
    private string $Niveau ;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateArrivee = null;

    #[ORM\Column(type: Types::DATE_MUTABLE,nullable: true)]
    private ?\DateTimeInterface $DateDocument = null;

    #[ORM\OneToMany(mappedBy: 'Document', targetEntity: Provenances::class, orphanRemoval: true)]
    private Collection $provenances;

    #[ORM\OneToMany(mappedBy: 'Document', targetEntity: Affectations::class)]
    private Collection $Affectations;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'documents')]
    private ?self $Reponse = null;

    #[ORM\OneToMany(mappedBy: 'Reponse', targetEntity: self::class)]
    private Collection $documents;

    #[ORM\Column(length: 25, nullable: true)]
    private ?string $Initiateur = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Observation = null;

    #[ORM\ManyToOne(inversedBy: 'documents')]
    #[ORM\JoinColumn(nullable: true)]

    private ?Postes $PosteOwner = null;


    public function __construct()
    {
        $this->Document_at = new DateTimeImmutable('now',null);
        $this->DateArrivee = new DateTimeImmutable('now',null);
        $this->DateDocument = new DateTimeImmutable('now',null);
        $this->provenances = new ArrayCollection();
        $this->Affectations = new ArrayCollection();
        $this->documents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getObjet(): ?string
    {
        return $this->Objet;
    }

    public function setObjet(string $Objet): self
    {
        $this->Objet = $Objet;

        return $this;
    }

    public function getMouvement(): ?string
    {
        return $this->Mouvement;
    }

    public function setMouvement(string $Mouvement): self
    {
        $this->Mouvement = $Mouvement;

        return $this;
    }

    public function getDocumentAt(): ?\DateTimeInterface
    {
        return $this->Document_at;
    }

    public function setDocumentAt(\DateTimeInterface $Document_at): self
    {
        $this->Document_at = $Document_at;

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

    public function getTypeDocument(): ?TypeDocuments
    {
        return $this->TypeDocument;
    }

    public function setTypeDocument(?TypeDocuments $TypeDocument): self
    {
        $this->TypeDocument = $TypeDocument;

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
     * Get the value of Chemin
     */ 
    public function getChemin()
    {
        return $this->Chemin;
    }

    /**
     * Set the value of Chemin
     *
     * @return  self
     */ 
    public function setChemin($Chemin)
    {
        $this->Chemin = $Chemin;

        return $this;
    }

    /**
     * @return Collection<int, Provenances>
     */
    public function getProvenances(): Collection
    {
        return $this->provenances;
    }

    public function addProvenance(Provenances $provenance): self
    {
        if (!$this->provenances->contains($provenance)) {
            $this->provenances->add($provenance);
            $provenance->setDocument($this);
        }

        return $this;
    }

    public function removeProvenance(Provenances $provenance): self
    {
        if ($this->provenances->removeElement($provenance)) {
            // set the owning side to null (unless already changed)
            if ($provenance->getDocument() === $this) {
                $provenance->setDocument(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Affectations>
     */
    public function getAffectations(): Collection
    {
        return $this->Affectations;
    }

    public function addAffectation(Affectations $Affectation): self
    {
        if (!$this->Affectations->contains($Affectation)) {
            $this->Affectations->add($Affectation);
            $Affectation->setDocument($this);
        }

        return $this;
    }

    public function removeAffectation(Affectations $Affectation): self
    {
        if ($this->Affectations->removeElement($Affectation)) {
            // set the owning side to null (unless already changed)
            if ($Affectation->getDocument() === $this) {
                $Affectation->setDocument(null);
            }
        }

        return $this;
    }

    /**
     * Get the value of DateArrivee
     */ 
    public function getDateArrivee()
    {
        return $this->DateArrivee;
    }

    /**
     * Set the value of DateArrivee
     *
     * @return  self
     */ 
    public function setDateArrivee($DateArrivee)
    {
        $this->DateArrivee = $DateArrivee;

        return $this;
    }

    /**
     * Get the value of Reference
     */ 
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * Set the value of Reference
     *
     * @return  self
     */ 
    public function setReference($Reference)
    {
        $this->Reference = $Reference;

        return $this;
    }

    /**
     * Get the value of Structure
     */ 
    public function getStructure()
    {
        return $this->Structure;
    }

    /**
     * Set the value of Structure
     *
     * @return  self
     */ 
    public function setStructure($Structure)
    {
        $this->Structure = $Structure;

        return $this;
    }

    /**
     * Get the value of NumeroEnregistrement
     */ 
    public function getNumeroEnregistrement(): ?int
    {
        return $this->NumeroEnregistrement;
    }

    /**
     * Set the value of NumeroEnregistrement
     *
     * @return  self
     */ 
    public function setNumeroEnregistrement(?int $NumeroEnregistrement)
    {
        $this->NumeroEnregistrement = $NumeroEnregistrement;

        return $this;
    }

    public function  __toString()
    {
        return (string)$this->getReference();
    }

    public function getReponse(): ?self
    {
        return $this->Reponse;
    }

    public function setReponse(?self $Reponse): self
    {
        $this->Reponse = $Reponse;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getDocuments(): Collection
    {
        return $this->documents;
    }

    public function addDocument(self $document): self
    {
        if (!$this->documents->contains($document)) {
            $this->documents->add($document);
            $document->setReponse($this);
        }

        return $this;
    }

    public function removeDocument(self $document): self
    {
        if ($this->documents->removeElement($document)) {
            // set the owning side to null (unless already changed)
            if ($document->getReponse() === $this) {
                $document->setReponse(null);
            }
        }

        return $this;
    }

    /**
     * Get the value of Poste
     *
     * @return string
     */
    public function getPoste(): string
    {
        return $this->Poste;
    }

    /**
     * Set the value of Poste
     *
     * @param string $Poste
     *
     * @return self
     */
    public function setPoste(string $Poste): self
    {
        $this->Poste = $Poste;

        return $this;
    }

    /**
     * Get the value of Niveau
     */ 
    public function getNiveau()
    {
        return $this->Niveau;
    }

    /**
     * Set the value of Niveau
     *
     * @return  self
     */ 
    public function setNiveau($Niveau)
    {
        $this->Niveau = $Niveau;

        return $this;
    }

    /**
     * Get the value of DateDocument
     */ 
    public function getDateDocument()
    {
        return $this->DateDocument;
    }

    /**
     * Set the value of DateDocument
     *
     * @return  self
     */ 
    public function setDateDocument($DateDocument)
    {
        $this->DateDocument = $DateDocument;

        return $this;
    }

    public function getInitiateur(): ?string
    {
        return $this->Initiateur;
    }

    public function setInitiateur(?string $Initiateur): self
    {
        $this->Initiateur = $Initiateur;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->Observation;
    }

    public function setObservation(?string $Observation): self
    {
        $this->Observation = $Observation;

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
