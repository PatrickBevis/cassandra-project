<?php

namespace App\Controller\Admin;

use App\Entity\Report;
use App\Enum\ReportType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ReportCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Report::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('type')
            ->setChoices([
                'MissionLetter' => ReportType::MISSIONL,
                'Mandats' => ReportType::MANDAT,
                'Report' => ReportType::REPORT,
            ]),
            TextField::new('title'),
            TextField::new('path'),
            IntegerField::new("bitsLength"),
            DateTimeField::new('created_at')->hideOnForm(),
            TextField::new('WrittenBy'),
            BooleanField::new('is_deleted'),
        ];
    }
    
}
