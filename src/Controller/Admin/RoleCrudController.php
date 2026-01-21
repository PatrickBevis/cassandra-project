<?php

namespace App\Controller\Admin;

use App\Entity\Role;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Enum\RoleCode;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;

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
                'Admin' => RoleCode::ADMIN->value,
                'Staff' => RoleCode::STAFF->value,
                'Auditor' => RoleCode::AUDITOR->value,
                'Examiner' => RoleCode::EXAMINER->value,
            ]),
    ];
}

}
