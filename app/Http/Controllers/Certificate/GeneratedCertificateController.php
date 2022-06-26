<?php

namespace App\Http\Controllers\Certificate;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Services\CertificateService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GeneratedCertificateController extends Controller
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

        return redirect()->route('certificates.view', $certificate);
    }
}
