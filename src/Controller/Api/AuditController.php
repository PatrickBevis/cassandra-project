<?php

namespace App\Controller\Api;

use App\Entity\Audit;
use App\Mapper\AuditMapper;
use App\Repository\AuditRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('api/audits')]
class AuditController extends AbstractController
{
    #[Route('', name: 'api_audit_index', methods: ['GET'])]
    public function index(
        AuditRepository $auditRepository,
        AuditMapper $auditMapper
    ): JsonResponse {
        $audits = $auditRepository->findAll();

        $data = array_map(
            fn(Audit $item) => $auditMapper->auditToDto($item),
            $audits
        );

        return $this->json($data);
    }

    #[Route('/{id}', name: 'api_audit_show', methods: ['GET'])]
    public function show(
        Audit $audit,
        AuditMapper $auditMapper
    ): JsonResponse {
        $data = $auditMapper->auditToDto($audit);

        return $this->json($data);
    }
}