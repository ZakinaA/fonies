<?php

namespace App\Entity;

use App\Repository\TypeInstrumentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeInstrumentRepository::class)]
class TypeInstrument
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $libelle = null;

    #[ORM\OneToMany(mappedBy: 'typeInstrument', targetEntity: Cours::class)]
    private Collection $cours;

    #[ORM\OneToMany(mappedBy: 'typeInstrument', targetEntity: Instrument::class)]
    private Collection $instruments;

    #[ORM\OneToMany(mappedBy: 'typeInstrument', targetEntity: Enseigne::class)]
    private Collection $enseignes;

    #[ORM\ManyToOne(inversedBy: 'typeInstruments')]
    private ?ClasseInstrument $classeInstrument = null;

    public function __construct()
    {
        $this->cours = new ArrayCollection();
        $this->instruments = new ArrayCollection();
        $this->enseignes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection<int, Cours>
     */
    public function getCours(): Collection
    {
        return $this->cours;
    }

    public function addCour(Cours $cour): self
    {
        if (!$this->cours->contains($cour)) {
            $this->cours->add($cour);
            $cour->setTypeInstrument($this);
        }

        return $this;
    }

    public function removeCour(Cours $cour): self
    {
        if ($this->cours->removeElement($cour)) {
            // set the owning side to null (unless already changed)
            if ($cour->getTypeInstrument() === $this) {
                $cour->setTypeInstrument(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Instrument>
     */
    public function getInstruments(): Collection
    {
        return $this->instruments;
    }

    public function addInstrument(Instrument $instrument): self
    {
        if (!$this->instruments->contains($instrument)) {
            $this->instruments->add($instrument);
            $instrument->setTypeInstrument($this);
        }

        return $this;
    }

    public function removeInstrument(Instrument $instrument): self
    {
        if ($this->instruments->removeElement($instrument)) {
            // set the owning side to null (unless already changed)
            if ($instrument->getTypeInstrument() === $this) {
                $instrument->setTypeInstrument(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Enseigne>
     */
    public function getEnseignes(): Collection
    {
        return $this->enseignes;
    }

    public function addEnseigne(Enseigne $enseigne): self
    {
        if (!$this->enseignes->contains($enseigne)) {
            $this->enseignes->add($enseigne);
            $enseigne->setTypeInstrument($this);
        }

        return $this;
    }

    public function removeEnseigne(Enseigne $enseigne): self
    {
        if ($this->enseignes->removeElement($enseigne)) {
            // set the owning side to null (unless already changed)
            if ($enseigne->getTypeInstrument() === $this) {
                $enseigne->setTypeInstrument(null);
            }
        }

        return $this;
    }

    public function getClasseInstrument(): ?ClasseInstrument
    {
        return $this->classeInstrument;
    }

    public function setClasseInstrument(?ClasseInstrument $classeInstrument): self
    {
        $this->classeInstrument = $classeInstrument;

        return $this;
    }
}
