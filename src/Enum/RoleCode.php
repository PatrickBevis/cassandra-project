<?php

namespace App\Enum;

enum RoleCode: string {
    case ADMIN = 'ADMIN';
    case AUDITOR = 'AUDITOR';
    case EXAMINER = 'EXAMINER';
    case STAFF = 'STAFF';
}