<?php

namespace App\Enum;

enum ReportType: string {
    case MISSIONL = 'MISSION LETTER';
    case MANDAT = 'MANDAT';
    case REPORT = 'REPORT';
}