<?php

namespace App\Entity;

use App\Repository\TrancheRepository;
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
}
