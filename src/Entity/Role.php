<?php

namespace App\Entity;
use App\Enum\RoleCode;
use App\Repository\RoleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoleRepository::class)]
class Role
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Champ enum
    #[ORM\Column(enumType: RoleCode::class)]
    private RoleCode $code;

    #[ORM\Column(length: 50)]
    private string $libelle;

    // --- Getters & Setters ---

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): RoleCode
    {
        return $this->code;
    }

    public function setCode(RoleCode $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;
        return $this;
    }
}