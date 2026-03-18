<?php

namespace App\Mapper;

use App\DTO\AddressDTO;

use App\Entity\Address;

class AddressMapper
{
    public function __construct(
 
    ) {}
    public function toDto(Address $address): AddressDTO
    {
        
        return new AddressDTO(
            id: $address->getId(),
            street_number: $address->getStreetNumber(),
            street_way: $address->getStreetWay(),
            street_name: $address->getStreetName(),
            street_complementary: $address->getStreetComplementary(),
            zip: $address->getZip(),
            city: $address->getCity(),
            country: $address->getCountry(),
            is_EU: $address->isEU(),
        );
    }
}