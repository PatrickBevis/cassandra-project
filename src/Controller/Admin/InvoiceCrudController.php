<?php

namespace App\Controller\Admin;

use App\Entity\Invoice;
use App\Enum\InvoiceStatus;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;



class InvoiceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Invoice::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new("number"),
            ChoiceField::new('status', 'Status')
            ->setChoices([
                'Given' => InvoiceStatus::GIV,
                'Payed' => InvoiceStatus::PYD,
                'Cancelled' => InvoiceStatus::CND,
                ]),
            DateTimeField::new('created_at')->hideOnForm(),
            NumberField::new('priceTaxFree')->setDecimalSeparator(','),
            AssociationField::new('tax')
            ->setLabel('tax'),
            NumberField::new('priceWithTax')->setDecimalSeparator(','),
            
        ];
    }
    
}
