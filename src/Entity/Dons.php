<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DonsRepository::class)]
class Dons
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $iddons ;


    #[ORM\Column]
    private ?int $nbpoints = NULL;

    #[ORM\Column]
    private ?DateTime $dateAjout = null;

  
    #[ORM\Column(length: 255)]
    private ?string $etatstatutdons = 'NULL';

   


    #[ORM\ManyToOne(inversedBy:'dons')]
   private ?Utilisateur $iduser= null;



   
    #[ORM\ManyToOne(inversedBy:'dons')]
   private ?Demandedons $iddemande= null;



    public function getIddons(): ?int
    {
        return $this->iddons;
    }

    public function getNbpoints(): ?int
    {
        return $this->nbpoints;
    }

    public function setNbpoints(?int $nbpoints): static
    {
        $this->nbpoints = $nbpoints;

        return $this;
    }

    public function getDateAjout(): ?\DateTimeInterface
    {
        return $this->dateAjout;
    }

    public function setDateAjout(\DateTimeInterface $dateAjout): static
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    public function getEtatstatutdons(): ?string
    {
        return $this->etatstatutdons;
    }

    public function setEtatstatutdons(?string $etatstatutdons): static
    {
        $this->etatstatutdons = $etatstatutdons;

        return $this;
    }

    public function getIduser(): ?Utilisateur
    {
        return $this->iduser;
    }

    public function setIduser(?Utilisateur $iduser): static
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIddemande(): ?Demandedons
    {
        return $this->iddemande;
    }

    public function setIddemande(?Demandedons $iddemande): static
    {
        $this->iddemande = $iddemande;

        return $this;
    }


}
