<?php

namespace App\Controller\Api;

use App\Entity\Address;
use App\Mapper\AddressMapper;
use App\Repository\AddressRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('api/addresses')]
class AddressController extends AbstractController{

    #[Route('', name: 'api_address_index', methods:['GET'])]
    public function index(
        AddressRepository $addressRepository,
        AddressMapper $addressMapper
    ): JsonResponse

    {
    $addresses = $addressRepository->findAll();
    $data = array_map(
        fn(Address $item) =>$addressMapper->addressToDto($item) , $addresses
    );
    return $this->json($data);
}
    #[Route('/{id}', name: 'address', methods:['GET'])]
    public function show(
        Address $address, 
        AddressMapper $addressMapper
        ): JsonResponse 
        
        {
            $data =$addressMapper->addressToDto($address);
            return $this->json($data);    
    }
}