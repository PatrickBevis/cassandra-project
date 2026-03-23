<?php

namespace App\Mapper;

use App\DTO\AuditDTO;

use App\Entity\Audit;

class AuditMapper
{
    public function __construct(
 
    ) {}
    public function toDto(Audit $audit): AuditDTO
    {
        
        return new AuditDTO(
            id: $audit->getId(),
            title: $audit->getTitle(),
           audit_inspector_name: $audit->getAuditInspectorName(),
            created_at: $audit->getCreatedAt(),
            ended_at: $audit->getEndedAt(),
            status: $audit->getStatus(),
        );
    }
}