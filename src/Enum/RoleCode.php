<?php

namespace App\Enum;

enum RoleCode: string {
    case ADMIN = 'Admin';
    case AUDITOR = 'Auditor';
    case EXAMINER = 'Examiner';
    case STAFF = 'Staff';
}