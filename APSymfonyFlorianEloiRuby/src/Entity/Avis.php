<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AvisRepository::class)
 */
class Avis
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idAvis;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreEtoilesAvis;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pseudoClientAvis;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentaireAvis;

    public function getIdAvis(): ?int
    {
        return $this->idAvis;
    }

    public function getNombreEtoilesAvis(): ?int
    {
        return $this->nombreEtoilesAvis;
    }

    public function setNombreEtoilesAvis(int $nombreEtoilesAvis): self
    {
        $this->nombreEtoilesAvis = $nombreEtoilesAvis;

        return $this;
    }

    public function getPseudoClientAvis(): ?string
    {
        return $this->pseudoClientAvis;
    }

    public function setPseudoClientAvis(string $pseudoClientAvis): self
    {
        $this->pseudoClientAvis = $pseudoClientAvis;

        return $this;
    }

    public function getCommentaireAvis(): ?string
    {
        return $this->commentaireAvis;
    }

    public function setCommentaireAvis(?string $commentaireAvis): self
    {
        $this->commentaireAvis = $commentaireAvis;

        return $this;
    }
}
