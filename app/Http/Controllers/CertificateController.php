<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;

class CertificateController extends Controller
{
    public function show(Certificate $certificate)
    {
        $november = today()->month(11);

        $startOfNovember = $november->copy()->startOfMonth()->format('jS \d\a\y \o\f F, Y');
        $endOfNovember = $november->copy()->endOfMonth()->format('jS \d\a\y \o\f F, Y');

        return view('certificates.show', compact('certificate', 'startOfNovember', 'endOfNovember'));
    }
}
