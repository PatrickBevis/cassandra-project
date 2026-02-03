<?php

namespace App\Controller\Admin;

use App\Entity\Address;
use App\Enum\AddressWay;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AddressCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Address::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new("streetNumber"),
            ChoiceField::new('streetWay')
            ->setChoices([
                'Rue'=> AddressWay::ST->value,
                'Boulevard' => AddressWay::BLV->value,
                'Avenue' => AddressWay::AVN->value,
            ]),  
            TextField::new('streetName'),
            TextField::new('streetComplementary'),
            IntegerField::new("zip"),
            TextField::new('City'),
            TextField::new('Country'),
            BooleanField::new('is_EU'),
           



        ];
    }
    
}
