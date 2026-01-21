<?php

namespace App\Controller\Admin;

use App\Entity\Role;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EnumField;
use App\Enum\RoleCode;

class RoleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Role::class;
    }

    public function configureFields(string $pageName): iterable
{
    return [
        EnumField::new('code')
            ->setEnum(RoleCode::class)
            ->renderAsBadges([
                'Admin' => RoleCode::ADMIN,
                'Staff' => RoleCode::STAFF,
                'Auditor' => RoleCode::AUDITOR,
                'Examiner' => RoleCode::EXAMINER,
            ]),
    ];
}
}
