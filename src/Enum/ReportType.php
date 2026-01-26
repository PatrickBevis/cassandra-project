<?php

namespace App\Enum;

enum ReportType: string {
    case MISSIONL = 'MissionLetter';
    case MANDAT = 'Mandat';
    case REPORT = 'Report';
}