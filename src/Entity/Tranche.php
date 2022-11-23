<?php

namespace App\Entity;

use App\Repository\TrancheRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrancheRepository::class)]
class Tranche
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quotientmin = null;

    #[ORM\Column]
    private ?int $quotientmax = null;

    #[ORM\OneToMany(mappedBy: 'tranche', targetEntity: Responsable::class)]
    private Collection $responsables;

    #[ORM\OneToMany(mappedBy: 'tranche', targetEntity: Tarif::class)]
    private Collection $tarifs;


    public function __construct()
    {
        $this->responsables = new ArrayCollection();
        $this->tarifs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuotientmin(): ?int
    {
        return $this->quotientmin;
    }

    public function setQuotientmin(int $quotientmin): self
    {
        $this->quotientmin = $quotientmin;

        return $this;
    }

    public function getQuotientmax(): ?int
    {
        return $this->quotientmax;
    }

    public function setQuotientmax(int $quotientmax): self
    {
        $this->quotientmax = $quotientmax;

        return $this;
    }

    /**
     * @return Collection<int, Responsable>
     */
    public function getResponsables(): Collection
    {
        return $this->responsables;
    }

    public function addResponsable(Responsable $responsable): self
    {
        if (!$this->responsables->contains($responsable)) {
            $this->responsables->add($responsable);
            $responsable->setTranche($this);
        }

        return $this;
    }

    public function removeResponsable(Responsable $responsable): self
    {
        if ($this->responsables->removeElement($responsable)) {
            // set the owning side to null (unless already changed)
            if ($responsable->getTranche() === $this) {
                $responsable->setTranche(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tarif>
     */
    public function getTarifs(): Collection
    {
        return $this->tarifs;
    }

    public function addTarif(Tarif $tarif): self
    {
        if (!$this->tarifs->contains($tarif)) {
            $this->tarifs->add($tarif);
            $tarif->setTranche($this);
        }

        return $this;
    }

    public function removeTarif(Tarif $tarif): self
    {
        if ($this->tarifs->removeElement($tarif)) {
            // set the owning side to null (unless already changed)
            if ($tarif->getTranche() === $this) {
                $tarif->setTranche(null);
            }
        }

        return $this;
    }

}
