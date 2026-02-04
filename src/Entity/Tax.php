<?php

namespace App\Entity;

use App\Enum\TaxRate;
use App\Repository\TaxRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaxRepository::class)]
class Tax
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

   

    

    #[ORM\Column(enumType: TaxRate::class)]
    private ?TaxRate $rate = null;

    public function __construct()
    {
      
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getRate(): ?TaxRate
    {
        return $this->rate;
    }

    public function setRate(TaxRate $rate): static
    {
        $this->rate = $rate;

        return $this;
    }
}
