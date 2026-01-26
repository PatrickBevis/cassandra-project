<?php

namespace App\Controller\Admin;

use App\Entity\Role;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Enum\RoleCode;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class RoleCrudController extends AbstractCrudController
{

 public static function getEntityFqcn(): string
    {
        return Role::class;
    }

 public function configureFields(string $pageName): iterable
{
    return [
        ChoiceField::new('code')
            ->setChoices([
                'Admin' => RoleCode::ADMIN,
                'Staff' => RoleCode::STAFF,
                'Auditor' => RoleCode::AUDITOR,
                'Examiner' => RoleCode::EXAMINER,
            ]),
        TextField::new('libelle'),
    ];
}

}
