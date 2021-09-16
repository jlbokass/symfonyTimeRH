<?php

namespace App\Entity;

use App\Repository\RhRequestsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RhRequestsRepository::class)
 */
class RhRequests
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $acompte;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $attestationMutuelle;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $attestationSalaire;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $attestationJourTravaillees;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $demandeLibre;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $duplicataBulletin;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedAt;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable('now');
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAcompte(): ?float
    {
        return $this->acompte;
    }

    public function setAcompte(?float $acompte): self
    {
        $this->acompte = $acompte;

        return $this;
    }

    public function getAttestationMutuelle(): ?string
    {
        return $this->attestationMutuelle;
    }

    public function setAttestationMutuelle(?string $attestationMutuelle): self
    {
        $this->attestationMutuelle = $attestationMutuelle;

        return $this;
    }

    public function getAttestationSalaire(): ?string
    {
        return $this->attestationSalaire;
    }

    public function setAttestationSalaire(?string $attestationSalaire): self
    {
        $this->attestationSalaire = $attestationSalaire;

        return $this;
    }

    public function getAttestationJourTravaillees(): ?string
    {
        return $this->attestationJourTravaillees;
    }

    public function setAttestationJourTravaillees(?string $attestationJourTravaillees): self
    {
        $this->attestationJourTravaillees = $attestationJourTravaillees;

        return $this;
    }

    public function getDemandeLibre(): ?string
    {
        return $this->demandeLibre;
    }

    public function setDemandeLibre(?string $demandeLibre): self
    {
        $this->demandeLibre = $demandeLibre;

        return $this;
    }

    public function getDuplicataBulletin(): ?\DateTimeInterface
    {
        return $this->duplicataBulletin;
    }

    public function setDuplicataBulletin(?\DateTimeInterface $duplicataBulletin): self
    {
        $this->duplicataBulletin = $duplicataBulletin;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
