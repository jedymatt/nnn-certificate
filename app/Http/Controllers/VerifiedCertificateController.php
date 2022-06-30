<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Inertia\Inertia;

class VerifiedCertificateController extends Controller
{
    public function create()
    {
        return Inertia::render('VerifyCertificatePage');
    }

    public function show(Certificate $certificate)
    {
        return Inertia::render('VerificationCertificateResultPage', compact('certificate'));
    }
}
