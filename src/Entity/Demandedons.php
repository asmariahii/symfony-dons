<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\DemandedonsRepository;


#[ORM\Entity(repositoryClass: "DemandedonsRepository::class")]
class Demandedons
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $iddemande ;



    #[ORM\Column(length: 255)]
    private ?string $contenu = null;



    #[ORM\Column(length: 255)]
     private ?string $image = null;

     
     #[ORM\Column(type: "datetime")]
     private ?\DateTimeInterface $datepublication = null;
     


     #[ORM\Column]
    private ?int $nbpoints = NULL;

    
    
    #[ORM\Column(length: 255)]
    private ?string $nomuser = null;



    #[ORM\Column(length: 255)]
    private ?string $prenomuser = null;



    #[ORM\ManyToOne(inversedBy:'Demandedons')]
     private ?Utilisateur $idutilisateur = null;



     #[ORM\ManyToOne(inversedBy:'Demandedons')]
    private ?Dons $iddons = null;

    public function getIddemande(): ?int
    {
        return $this->iddemande;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getDatepublication(): ?\DateTimeInterface
    {
        return $this->datepublication;
    }

    public function setDatepublication(?\DateTimeInterface $datepublication): static
    {
        $this->datepublication = $datepublication;
        return $this;
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

    public function getNomuser(): ?string
    {
        return $this->nomuser;
    }

    public function setNomuser(?string $nomuser): static
    {
        $this->nomuser = $nomuser;

        return $this;
    }

    public function getPrenomuser(): ?string
    {
        return $this->prenomuser;
    }

    public function setPrenomuser(?string $prenomuser): static
    {
        $this->prenomuser = $prenomuser;

        return $this;
    }

    public function getIdutilisateur(): ?Utilisateur
    {
        return $this->idutilisateur;
    }

    public function setIdutilisateur(?Utilisateur $idutilisateur): static
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    public function getIddons(): ?Dons
    {
        return $this->iddons;
    }

    public function setIddons(?Dons $iddons): static
    {
        $this->iddons = $iddons;

        return $this;
    }


}
