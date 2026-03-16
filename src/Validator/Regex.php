<?php

namespace App\Validator;

final class Regex
{
    public const NAME = '/^[A-Z][a-zçA-Z]{0,19}$/';
    public const EMAIL = '/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i';
    public const SIRET = '/\d{14}/';
    public const PHONE = '/(?:([+]\d{1,4})[-.\s]?)?(?:[(](\d{1,3})[)][-.\s]?)?(\d{1,4})[-.\s]?(\d{1,4})[-.\s]?(\d{1,9})/';


}