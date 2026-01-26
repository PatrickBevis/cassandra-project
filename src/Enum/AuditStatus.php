<?php

namespace App\Enum;

enum AuditStatus: string {
    case ASKED = 'Asked';
    case INPROG = 'InProgress';
    case ENDED = 'Ended';


    
}