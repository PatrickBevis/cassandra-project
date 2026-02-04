<?php

namespace App\Entity;

use App\Enum\AddressWay;
use App\Repository\AddressRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AddressRepository::class)]
class Address
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $street_number = null;

    #[ORM\Column(length:30, enumType:AddressWay::class)]
    private ?AddressWay $street_way = null;

    #[ORM\Column(length: 30)]
    private ?string $street_name = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $street_complementary = null;

    #[ORM\Column]
    private ?int $zip = null;

    #[ORM\Column(length: 30)]
    private ?string $city = null;

    #[ORM\Column(length: 20)]
    private ?string $country = null;

    #[ORM\Column]
    private ?bool $is_EU = null;

   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStreetNumber(): ?int
    {
        return $this->street_number;
    }

    public function setStreetNumber(int $street_number): static
    {
        $this->street_number = $street_number;

        return $this;
    }

    public function getStreetWay(): ?AddressWay
    {
        return $this->street_way;
    }

    public function setStreetWay(AddressWay $street_way): static
    {
        $this->street_way = $street_way;

        return $this;
    }

    public function getStreetName(): ?string
    {
        return $this->street_name;
    }

    public function setStreetName(string $street_name): static
    {
        $this->street_name = $street_name;

        return $this;
    }

    public function getStreetComplementary(): ?string
    {
        return $this->street_complementary;
    }

    public function setStreetComplementary(string $street_complementary): static
    {
        $this->street_complementary = $street_complementary;

        return $this;
    }

    public function getZip(): ?int
    {
        return $this->zip;
    }

    public function setZip(int $zip): static
    {
        $this->zip = $zip;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function isEU(): ?bool
    {
        return $this->is_EU;
    }

    public function setIsEU(bool $is_EU): static
    {
        $this->is_EU = $is_EU;

        return $this;
    }

    

   
}
