<?php

namespace App\Entity;

use App\Repository\InterPretRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InterPretRepository::class)]
class InterPret
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quotite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuotite(): ?int
    {
        return $this->quotite;
    }

    public function setQuotite(int $quotite): self
    {
        $this->quotite = $quotite;

        return $this;
    }
}
