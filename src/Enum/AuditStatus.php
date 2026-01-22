<?php

namespace App\Enum;

enum AuditStatus: string {
    case ASKED = 'ASKED';
    case INPROG = 'IN PROGRESS';
    case ENDED = 'ENDED';
}