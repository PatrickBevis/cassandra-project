<?php

namespace App\Controller\Admin;

use App\Entity\Customer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class CustomerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Customer::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('companyName'),
            EmailField::new('email'),
            TextField::new('siretNumber'),
            TextField::new('phoneNumber'),
            AssociationField::new('invoice')
            ->setLabel('Invoice')
            ->formatValue(fn($invoice) =>
                $invoice->getNumber()
            ),
            BooleanField::new('is_deleted'),

        ];
    }
    
}
