<?php

namespace App\Controller\Admin;

use App\Entity\Invoice;
use App\Enum\InvoiceStatus;
use Doctrine\DBAL\Types\DecimalType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


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
            // AssociationField::new('tax')
            // ->setLabel('tax')
            // ->formatValue(fn($invoice) =>
            //     $invoice->getTaxes()->value
            // ),
            NumberField::new('priceWithTax')->setDecimalSeparator(','),
            NumberField::new('total'),
            
        ];
    }
    
}
