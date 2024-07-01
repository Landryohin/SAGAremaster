<?php

namespace App\Entity;

use App\Entity\Services;
use App\Entity\Divisions;
use App\Entity\Documents;
use App\Entity\Directions;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UsersRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use phpDocumentor\Reflection\PseudoTypes\True_;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email ;

    #[ORM\Column(length: 80)]
    private ?string $nom ;

    #[ORM\Column(length: 100)]
    private ?string $prenom ;

    #[ORM\Column]
    private array $roles = [];

    #[ORM\Column(length: 15)]
    private string $niveau = "Agent" ;

    #[ORM\Column(length: 15)]
    private string $zone = "DGML" ;
    #[ORM\Column]
    private ?bool $status = true;

    /**
     * @var string The hashed password
     */
    #[ORM\Column(length: 255)]
    private string $password ;

    #[ORM\OneToMany(mappedBy: 'Owner', targetEntity: Documents::class)]
    private Collection $documents;

    #[ORM\OneToMany(mappedBy: 'Directeur', targetEntity: Directions::class)]
    private Collection $directions;

    #[ORM\OneToMany(mappedBy: 'Chef', targetEntity: Divisions::class)]
    private Collection $divisions;

    #[ORM\OneToMany(mappedBy: 'Chef', targetEntity: Services::class)]
    private Collection $services;

    #[ORM\OneToMany(mappedBy: 'Owner', targetEntity: Directions::class)]
    private Collection $directionOwners;

    #[ORM\OneToMany(mappedBy: 'Owner', targetEntity: Divisions::class)]
    private Collection $divisionOwners;

    #[ORM\OneToMany(mappedBy: 'Owner', targetEntity: Services::class)]
    private Collection $serviceOwners;

    #[ORM\OneToMany(mappedBy: 'Owner', targetEntity: Secretariats::class)]
    private Collection $secretariatOwners;

    #[ORM\OneToMany(mappedBy: 'Owner', targetEntity: TypeDocuments::class)]
    private Collection $typeDocumentOwners;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'userOwners')]
    private ?self $Owner = null;

    #[ORM\OneToMany(mappedBy: 'Owner', targetEntity: self::class)]
    private Collection $userOwners;

    #[ORM\OneToMany(mappedBy: 'Owner', targetEntity: Affectations::class)]
    private Collection $affectations;

    #[ORM\OneToMany(mappedBy: 'Agent', targetEntity: Postes::class)]
    private Collection $postes;

    #[ORM\OneToMany(mappedBy: 'Owner', targetEntity: Postes::class)]
    private Collection $posteOwners;

    #[ORM\OneToMany(mappedBy: 'Agent', targetEntity: Affectations::class)]
    private Collection $AffectationAgents;


    public function __construct()
    {
        $this->documents = new ArrayCollection();
        $this->directions = new ArrayCollection();
        $this->divisions = new ArrayCollection();
        $this->services = new ArrayCollection();
        $this->directionOwners = new ArrayCollection();
        $this->divisionOwners = new ArrayCollection();
        $this->serviceOwners = new ArrayCollection();
        $this->secretariatOwners = new ArrayCollection();
        $this->typeDocumentOwners = new ArrayCollection();
        $this->userOwners = new ArrayCollection();
        $this->affectations = new ArrayCollection();
        $this->postes = new ArrayCollection();
        $this->posteOwners = new ArrayCollection();
        $this->AffectationAgents = new ArrayCollection();

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->id;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        
        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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
            $document->setOwner($this);
        }

        return $this;
    }

    public function removeDocument(Documents $document): self
    {
        if ($this->documents->removeElement($document)) {
            // set the owning side to null (unless already changed)
            if ($document->getOwner() === $this) {
                $document->setOwner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Directions>
     */
    public function getDirections(): Collection
    {
        return $this->directions;
    }

    public function addDirection(Directions $direction): self
    {
        if (!$this->directions->contains($direction)) {
            $this->directions->add($direction);
            $direction->setDirecteur($this);
        }

        return $this;
    }

    public function removeDirection(Directions $direction): self
    {
        if ($this->directions->removeElement($direction)) {
            // set the owning side to null (unless already changed)
            if ($direction->getDirecteur() === $this) {
                $direction->setDirecteur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Divisions>
     */
    public function getDivisions(): Collection
    {
        return $this->divisions;
    }

    public function addDivision(Divisions $division): self
    {
        if (!$this->divisions->contains($division)) {
            $this->divisions->add($division);
            $division->setChef($this);
        }

        return $this;
    }

    public function removeDivision(Divisions $division): self
    {
        if ($this->divisions->removeElement($division)) {
            // set the owning side to null (unless already changed)
            if ($division->getChef() === $this) {
                $division->setChef(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Services>
     */
    public function getServices(): Collection
    {
        return $this->services;
    }

    public function addService(Services $service): self
    {
        if (!$this->services->contains($service)) {
            $this->services->add($service);
            $service->setChef($this);
        }

        return $this;
    }

    public function removeService(Services $service): self
    {
        if ($this->services->removeElement($service)) {
            // set the owning side to null (unless already changed)
            if ($service->getChef() === $this) {
                $service->setChef(null);
            }
        }

        return $this;
    }

    /**
     * Get the value of niveau
     */ 
    public function getNiveau(): string
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get the value of zone
     */ 
    public function getZone(): string
    {
        return $this->zone;
    }

    /**
     * Set the value of zone
     *
     * @return  self
     */ 
    public function setZone($zone)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
    public function __toString()
    {
        return (string) $this->getPrenom()."  ".$this->getNom();
    }

    /**
     * Get the value of status
     */ 
    public function getStatus(): bool
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
     * @return Collection<int, Directions>
     */
    public function getDirectionOwners(): Collection
    {
        return $this->directionOwners;
    }

    public function addDirectionOwner(Directions $directionOwner): self
    {
        if (!$this->directionOwners->contains($directionOwner)) {
            $this->directionOwners->add($directionOwner);
            $directionOwner->setOwner($this);
        }

        return $this;
    }

    public function removeDirectionOwner(Directions $directionOwner): self
    {
        if ($this->directionOwners->removeElement($directionOwner)) {
            // set the owning side to null (unless already changed)
            if ($directionOwner->getOwner() === $this) {
                $directionOwner->setOwner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Divisions>
     */
    public function getDivisionOwners(): Collection
    {
        return $this->divisionOwners;
    }

    public function addDivisionOwner(Divisions $divisionOwner): self
    {
        if (!$this->divisionOwners->contains($divisionOwner)) {
            $this->divisionOwners->add($divisionOwner);
            $divisionOwner->setOwner($this);
        }

        return $this;
    }

    public function removeDivisionOwner(Divisions $divisionOwner): self
    {
        if ($this->divisionOwners->removeElement($divisionOwner)) {
            // set the owning side to null (unless already changed)
            if ($divisionOwner->getOwner() === $this) {
                $divisionOwner->setOwner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Services>
     */
    public function getServiceOwners(): Collection
    {
        return $this->serviceOwners;
    }

    public function addServiceOwner(Services $serviceOwner): self
    {
        if (!$this->serviceOwners->contains($serviceOwner)) {
            $this->serviceOwners->add($serviceOwner);
            $serviceOwner->setOwner($this);
        }

        return $this;
    }

    public function removeServiceOwner(Services $serviceOwner): self
    {
        if ($this->serviceOwners->removeElement($serviceOwner)) {
            // set the owning side to null (unless already changed)
            if ($serviceOwner->getOwner() === $this) {
                $serviceOwner->setOwner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Secretariats>
     */
    public function getSecretariatOwners(): Collection
    {
        return $this->secretariatOwners;
    }

    public function addSecretariatOwner(Secretariats $secretariatOwner): self
    {
        if (!$this->secretariatOwners->contains($secretariatOwner)) {
            $this->secretariatOwners->add($secretariatOwner);
            $secretariatOwner->setOwner($this);
        }

        return $this;
    }

    public function removeSecretariatOwner(Secretariats $secretariatOwner): self
    {
        if ($this->secretariatOwners->removeElement($secretariatOwner)) {
            // set the owning side to null (unless already changed)
            if ($secretariatOwner->getOwner() === $this) {
                $secretariatOwner->setOwner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TypeDocuments>
     */
    public function getTypeDocumentOwners(): Collection
    {
        return $this->typeDocumentOwners;
    }

    public function addTypeDocumentOwner(TypeDocuments $typeDocumentOwner): self
    {
        if (!$this->typeDocumentOwners->contains($typeDocumentOwner)) {
            $this->typeDocumentOwners->add($typeDocumentOwner);
            $typeDocumentOwner->setOwner($this);
        }

        return $this;
    }

    public function removeTypeDocumentOwner(TypeDocuments $typeDocumentOwner): self
    {
        if ($this->typeDocumentOwners->removeElement($typeDocumentOwner)) {
            // set the owning side to null (unless already changed)
            if ($typeDocumentOwner->getOwner() === $this) {
                $typeDocumentOwner->setOwner(null);
            }
        }

        return $this;
    }

    public function getOwner(): ?self
    {
        return $this->Owner;
    }

    public function setOwner(?self $Owner): self
    {
        $this->Owner = $Owner;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getUserOwners(): Collection
    {
        return $this->userOwners;
    }

    public function addUserOwner(self $userOwner): self
    {
        if (!$this->userOwners->contains($userOwner)) {
            $this->userOwners->add($userOwner);
            $userOwner->setOwner($this);
        }

        return $this;
    }

    public function removeUserOwner(self $userOwner): self
    {
        if ($this->userOwners->removeElement($userOwner)) {
            // set the owning side to null (unless already changed)
            if ($userOwner->getOwner() === $this) {
                $userOwner->setOwner(null);
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
            $affectation->setOwner($this);
        }

        return $this;
    }

    public function removeAffectation(Affectations $affectation): self
    {
        if ($this->affectations->removeElement($affectation)) {
            // set the owning side to null (unless already changed)
            if ($affectation->getOwner() === $this) {
                $affectation->setOwner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Postes>
     */
    public function getPostes(): Collection
    {
        return $this->postes;
    }

    public function addPoste(Postes $poste): self
    {
        if (!$this->postes->contains($poste)) {
            $this->postes->add($poste);
            $poste->setAgent($this);
        }

        return $this;
    }

    public function removePoste(Postes $poste): self
    {
        if ($this->postes->removeElement($poste)) {
            // set the owning side to null (unless already changed)
            if ($poste->getAgent() === $this) {
                $poste->setAgent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Postes>
     */
    public function getPosteOwners(): Collection
    {
        return $this->posteOwners;
    }

    public function addPosteOwner(Postes $posteOwner): self
    {
        if (!$this->posteOwners->contains($posteOwner)) {
            $this->posteOwners->add($posteOwner);
            $posteOwner->setOwner($this);
        }

        return $this;
    }

    public function removePosteOwner(Postes $posteOwner): self
    {
        if ($this->posteOwners->removeElement($posteOwner)) {
            // set the owning side to null (unless already changed)
            if ($posteOwner->getOwner() === $this) {
                $posteOwner->setOwner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Affectations>
     */
    public function getAffectationAgents(): Collection
    {
        return $this->AffectationAgents;
    }

    public function addAffectationAgent(Affectations $affectationAgent): self
    {
        if (!$this->AffectationAgents->contains($affectationAgent)) {
            $this->AffectationAgents->add($affectationAgent);
            $affectationAgent->setAgent($this);
        }

        return $this;
    }

    public function removeAffectationAgent(Affectations $affectationAgent): self
    {
        if ($this->AffectationAgents->removeElement($affectationAgent)) {
            // set the owning side to null (unless already changed)
            if ($affectationAgent->getAgent() === $this) {
                $affectationAgent->setAgent(null);
            }
        }

        return $this;
    }

}
