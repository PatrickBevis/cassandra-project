<?php

namespace App\Enum;

enum InvoiceStatus: string {
    case GIV = 'Given';
    case PYD = 'Payed';
    case CND = 'Cancelled';
}