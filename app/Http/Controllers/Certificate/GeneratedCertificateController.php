<?php

namespace App\Http\Controllers\Certificate;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GeneratedCertificateController extends Controller
{
    public function create()
    {
        return Inertia::render('GenerateCertificatePage');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
        ]);

        Certificate::create([
            'name' => $validated['name'],
            'validation_key' => str()->uuid()->toString(),
            'issue_date' => today(),
        ]);

        return redirect()->route('welcome');
    }
}
