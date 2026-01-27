<?php

namespace App\Controller\Admin;

use App\Entity\Tax;
use App\Enum\TaxRate;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TaxCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Tax::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
           ChoiceField::new('rate')
            ->setChoices([
                '0.055'=> TaxRate::CINQ,
                '0.1' => TaxRate::DIX,
                '0.2' => TaxRate::VINGT,
            ]),  
        ];
    }
    
}
