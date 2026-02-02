<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use App\Validator\Regex;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


#[UniqueEntity(fields: ['email'], message: 'Email used.')]
#[ORM\Entity(repositoryClass: CustomerRepository::class)]
class Customer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank("Obligatory field")]
    private ?string $company_name = null;

    #[ORM\Column(length: 30, unique:true)]
    #[Assert\NotBlank("Obligatory field")]
    #[Assert\Regex(
        pattern: Regex::EMAIL,
        message: 'Invalid email'
    )]

    private ?string $email = null;

    #[ORM\Column(length: 14, nullable: true)]
    #[Assert\Regex(
        pattern: Regex::SIRET,
        message: 'Invalid siret'
    )]
    private ?string $siret_number = null;

    #[ORM\Column(length: 12)]
    #[Assert\NotBlank("Obligatory field")]
    #[Assert\Regex(
        pattern: Regex::PHONE,
        message: 'Invalid phone number'
    )]
    private ?string $phone_number = null;

    #[ORM\Column]
    private ?bool $is_deleted = null;

    #[ORM\ManyToOne(inversedBy: 'customers')]
    private ?Invoice $invoice = null;

    #[ORM\ManyToOne(inversedBy: 'customer')]
    private ?Address $address = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyName(): ?string
    {
        return $this->company_name;
    }

    public function setCompanyName(string $company_name): static
    {
        $this->company_name = $company_name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getSiretNumber(): ?string
    {
        return $this->siret_number;
    }

    public function setSiretNumber(?string $siret_number): static
    {
        $this->siret_number = $siret_number;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phone_number): static
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    public function isDeleted(): ?bool
    {
        return $this->is_deleted;
    }

    public function setIsDeleted(bool $is_deleted): static
    {
        $this->is_deleted = $is_deleted;

        return $this;
    }

    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    public function setInvoice(?Invoice $invoice): static
    {
        $this->invoice = $invoice;

        return $this;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): static
    {
        $this->address = $address;

        return $this;
    }
}
