<?php

namespace App\DTO;

use App\Enum\AddressWay;

class AddressDTO{
     public function __construct(
        public ?int $id,
        public ?int $street_number,
        public ?AddressWay $street_way,
        public ?string $street_name,
        public ?string $street_complementary,
        public ?int $zip,
        public ?string $city,
        public ?string $country,
        public ?bool $is_EU,
        
        
    ) {}
}