<?php

namespace App\Enum;

enum TaxRate: string {
    case CINQ = "0.055";
    case VINGT = "0.2";
    case DIX = "0.1";
}