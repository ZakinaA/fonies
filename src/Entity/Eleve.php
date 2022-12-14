<?php

namespace App\Entity;

use App\Repository\EleveRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EleveRepository::class)]
class Eleve
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: '2 caractères minimum',
        maxMessage: '50 caractères maximum',
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: '2 caractères minimum',
        maxMessage: '50 caractères maximum',
    )]
    private ?string $prenom = null;

    #[ORM\Column(nullable: true)]    
    #[Assert\Length(
        max: 5,
        maxMessage: '5 caractères maximum',
    )]
    private ?int $numRue = null;

    #[ORM\Column(length: 50, nullable: true)]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: '2 caractères minimum',
        maxMessage: '50 caractères maximum',
    )]
    private ?string $rue = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Length(
        max: 5,
        maxMessage: '5 caractères maximum',
    )]
    private ?int $code_postale = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: '2 caractères minimum',
        maxMessage: '100 caractères maximum',
    )]
    private ?string $ville = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Length(
        max: 10,
        maxMessage: '10 caractères maximum',
    )]
    private ?string $telephone = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: '2 caractères minimum',
        maxMessage: '100 caractères maximum',
    )]
    private ?string $email = null;

    #[ORM\ManyToOne(inversedBy: 'eleve')]
    private ?Responsable $responsable = null;

    #[ORM\OneToMany(mappedBy: 'eleve', targetEntity: Inscription::class)]
    private Collection $inscription;

    #[ORM\OneToMany(mappedBy: 'eleve', targetEntity: ContratPret::class)]
    private Collection $contratPret;

    #[ORM\ManyToOne(inversedBy: 'eleves')]
    private ?User $emailU = null;

    public function __construct()
    {
        $this->compte = new ArrayCollection();
        $this->inscription = new ArrayCollection();
        $this->contratPret = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNumRue(): ?int
    {
        return $this->numRue;
    }

    public function setNumRue(?int $numRue): self
    {
        $this->numRue = $numRue;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(?string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getCodePostale(): ?int
    {
        return $this->code_postale;
    }

    public function setCodePostale(?int $code_postale): self
    {
        $this->code_postale = $code_postale;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getResponsable(): ?Responsable
    {
        return $this->responsable;
    }

    public function setResponsable(?Responsable $responsable): self
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * @return Collection<int, Inscription>
     */
    public function getInscription(): Collection
    {
        return $this->inscription;
    }

    public function addInscription(Inscription $inscription): self
    {
        if (!$this->inscription->contains($inscription)) {
            $this->inscription->add($inscription);
            $inscription->setEleve($this);
        }

        return $this;
    }

    public function removeInscription(Inscription $inscription): self
    {
        if ($this->inscription->removeElement($inscription)) {
            // set the owning side to null (unless already changed)
            if ($inscription->getEleve() === $this) {
                $inscription->setEleve(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ContratPret>
     */
    public function getContratPret(): Collection
    {
        return $this->contratPret;
    }

    public function addContratPret(ContratPret $contratPret): self
    {
        if (!$this->contratPret->contains($contratPret)) {
            $this->contratPret->add($contratPret);
            $contratPret->setEleve($this);
        }

        return $this;
    }

    public function removeContratPret(ContratPret $contratPret): self
    {
        if ($this->contratPret->removeElement($contratPret)) {
            // set the owning side to null (unless already changed)
            if ($contratPret->getEleve() === $this) {
                $contratPret->setEleve(null);
            }
        }

        return $this;
    }

    public function getEmailU(): ?User
    {
        return $this->emailU;
    }

    public function setEmailU(?User $emailU): self
    {
        $this->emailU = $emailU;

        return $this;
    }
}
