<?php

namespace App\Services;

class CertificateService
{

    public function generateValidationKey(): string
    {
        return strtolower(str()->random(10));
    }
}
