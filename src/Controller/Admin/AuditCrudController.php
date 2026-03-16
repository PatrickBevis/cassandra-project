<?php

namespace App\Controller\Admin;

use App\Entity\Audit;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AuditCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Audit::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [

         TextField::new('title'),
         TextField::new('auditInspectorName'),
         DateTimeField::new('created_at')->hideOnForm(),
         DateTimeField::new('ended_at')->hideOnForm(),
         ChoiceField::new('status')
            ->setChoices([
                'Asked'=> AuditStatus::ASKED->value,
                'InProgress' => AuditStatus::INPROG->value,
                'Ended' => AuditStatus::ENDED->value,
            ]),  
        AssociationField::new('report')
            ->setLabel('Reports')
            ->formatValue(fn($report) =>
                $report?->getTitle()
            ),
    ];

    }
    */
}
