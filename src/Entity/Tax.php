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

   

    /**
     * @var Collection<int, Invoice>
     */
    #[ORM\ManyToMany(targetEntity: Invoice::class, inversedBy: 'taxes')]
    private Collection $invoice;

    #[ORM\Column(enumType: TaxRate::class)]
    private ?TaxRate $rate = null;

    public function __construct()
    {
        $this->invoice = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @return Collection<int, Invoice>
     */
    public function getInvoice(): Collection
    {
        return $this->invoice;
    }

    public function addInvoice(Invoice $invoice): static
    {
        if (!$this->invoice->contains($invoice)) {
            $this->invoice->add($invoice);
        }

        return $this;
    }

    public function removeInvoice(Invoice $invoice): static
    {
        $this->invoice->removeElement($invoice);

        return $this;
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

      public function __toString(): string
{
    return $this->rate?->value;
}
}