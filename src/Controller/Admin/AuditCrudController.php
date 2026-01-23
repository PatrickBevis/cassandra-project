<?php

namespace App\Controller\Admin;

use App\Entity\Audit;
use App\Enum\AuditStatus;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AuditCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Audit::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
         TextField::new('title'),
         TextField::new('Audit inspector name'),
         DateTimeField::new('created_at')->hideOnForm(),
         DateTimeField::new('ended_at')->hideOnForm(),
         ChoiceField::new('status')
            ->setChoices([
                'Asked' => AuditStatus::ASKED->value,
                'In progress' => AuditStatus::INPROG->value,
                'Ended' => AuditStatus::ENDED->value,
            ]),
        AssociationField::new('report')
            ->setLabel('Reports')
            ->formatValue(fn($report) =>
                $report?->getTitle()
                ,
            ),
         BooleanField::new('is_deleted'),
    ];
    }
    
}
