<?php

namespace App\Services;

class CertificateService
{

    public function generateValidationKey()
    {
        return strtolower(str()->random(10));
    }
}
