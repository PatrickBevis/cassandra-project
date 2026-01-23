<?php

namespace App\Enum;

enum InvoiceStatus: string {
    case GIVEN = 'GIVEN';
    case PAYED = 'PAYED';
    case CANCELED = 'CANCELED';
}