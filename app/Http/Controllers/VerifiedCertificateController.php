<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Inertia\Inertia;

class VerifiedCertificateController extends Controller
{
    public function create()
    {
        return Inertia::render('VerifyCertificatePage.vue');
    }

    public function show(Certificate $certificate)
    {
        return Inertia::render('VerificationCertificateResultPage.vue', compact('certificate'));
    }
}
