<?php

namespace App\Entity;

use App\Enum\ReportType;
use App\Repository\ReportRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReportRepository::class)]
class Report
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(enumType: ReportType::class)]
    private ?ReportType $type = null;

    #[ORM\Column(length: 30)]
    private ?string $title = null;

    #[ORM\Column(length: 125)]
    private ?string $path = null;

    #[ORM\Column]
    private ?int $bits_length = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(length: 30)]
    private ?string $writtenBy = null;

   
    

   

    public function __construct()
    {
       
       
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?ReportType
    {
        return $this->type;
    }

    public function setType(ReportType $type): static
    {
        $this->type = $type;

        return $this;
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

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): static
    {
        $this->path = $path;

        return $this;
    }

    public function getBitsLength(): ?int
    {
        return $this->bits_length;
    }

    public function setBitsLength(int $bits_length): static
    {
        $this->bits_length = $bits_length;

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

    public function getWrittenBy(): ?string
    {
        return $this->writtenBy;
    }

    public function setWrittenBy(string $writtenBy): static
    {
        $this->writtenBy = $writtenBy;

        return $this;
    }
    
  public function __toString(): string
    {
        return $this->title ?? '';
    }
}