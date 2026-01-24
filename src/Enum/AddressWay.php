<?php

namespace App\Enum;

enum AddressWay: string {
    case ST = 'RUE';
    case BLV = 'BOULEVARD';
    case AVN = 'AVENUE';
}