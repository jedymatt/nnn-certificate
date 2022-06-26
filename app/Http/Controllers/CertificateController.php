<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Services\CertificateService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CertificateController extends Controller
{
    public function create()
    {
        return Inertia::render('GenerateCertificatePage');
    }

    public function store(Request $request, CertificateService $certificateService)
    {
        $validated = $request->validate([
            'display_name' => 'required|string',
        ]);

        $certificate = Certificate::create([
            'display_name' => $validated['display_name'],
            'validation_key' => $certificateService->generateValidationKey(),
            'issue_date' => today(),
        ]);

        return redirect()->route('certificate.view', $certificate);
    }

    public function show(Certificate $certificate)
    {
        return Inertia::render('ViewCertificatePage', [
            'certificate' => $certificate,
        ]);
    }
}
