<?php

namespace App\DTO;

use App\Enum\AuditStatus;
use DateTimeImmutable;

class AuditDTO{
     public function __construct(
        public ?int $id,
        public ?string $title,
        public ?string $audit_inspector_name,
        public ?DateTimeImmutable $created_at,
        public ?DateTimeImmutable $ended_at,
        public ?AuditStatus $status,
        
        
    ) {}
}