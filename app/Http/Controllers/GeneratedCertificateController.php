<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class GeneratedCertificateController extends Controller
{
    public function create()
    {
        return view('certificate.generate');
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|string',
        ])->validate();

        $validated['validation_key'] = Str::uuid()->toString();
        $validated['issue_date'] = today();

        $certificate = Certificate::create($validated);

        return redirect()->route('certificate-export-pdf', $certificate);
    }
}
