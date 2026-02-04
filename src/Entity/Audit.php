<?php

namespace App\Entity;

use App\Enum\AuditStatus;
use App\Repository\AuditRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuditRepository::class)]
class Audit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $title = null;
    
    #[ORM\Column(length: 30, nullable:true)]
    private ?string $audit_inspector_name = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $ended_at;

    #[ORM\Column(enumType: AuditStatus::class)]
    private ?AuditStatus $status = null;

 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getAuditInspectorName(): ?string
    {
        return $this->audit_inspector_name;
    }

    public function setAuditInspectorName(string $audit_inspector_name): static
    {
        $this->audit_inspector_name = $audit_inspector_name;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getEndedAt(): ?\DateTimeImmutable
    {
        return $this->ended_at;
    }

    public function setEndedAt(\DateTimeImmutable $ended_at): static
    {
        $this->ended_at = $ended_at;

        return $this;
    }

    public function getStatus(): ?AuditStatus
    {
        return $this->status;
    }

    public function setStatus(AuditStatus $status): static
    {
        $this->status = $status;

        return $this;
    }

}