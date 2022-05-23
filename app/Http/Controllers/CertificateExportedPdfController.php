<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CertificateExportedPdfController extends Controller
{
    public function show(Certificate $certificate)
    {
        $november = today()->month(11);

        $startOfNovember = $november->copy()->startOfMonth()->format('jS \d\a\y \o\f F, Y');
        $endOfNovember = $november->copy()->endOfMonth()->format('jS \d\a\y \o\f F, Y');

        Pdf::setOptions(['isJavascriptEnabled' => true, 'isHtml5ParserEnabled' => true, 'isPhpEnabled' => true]);

        /** @var QrCode $qrCode */
        $qrCode = base64_encode(QrCode::format('svg')->size(100)->generate(route('certificate.validate', $certificate)));

        $pdf = Pdf::loadView('export-pdf.certificate', compact('certificate', 'startOfNovember', 'endOfNovember', 'qrCode'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('nnn-certificate-'. now()->timestamp .'.pdf');
    }
}
