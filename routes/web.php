<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CertificateExportedPdfController;
use App\Http\Controllers\GeneratedCertificateController;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/generate-certificate', [GeneratedCertificateController::class, 'create'])
    ->name('certificate.generate');

Route::post('/generate-certificate', [GeneratedCertificateController::class, 'store']);

Route::get('/generated-certificate/{certificate:validation_key}', [GeneratedCertificateController::class, 'show'])
    ->name('certificate.generated');

Route::get('/validate-certificate/{certificate:validation_key}', function (Certificate $certificate) {
    return view('certificate.validate', compact('certificate'));
})->name('certificate.validate');

Route::get('/certificates/{certificate:validation_key}', [CertificateController::class, 'show'])
    ->name('certificates.show');

Route::get('/certificate-export-pdf/{certificate:validation_key}', [CertificateExportedPdfController::class, 'show'])
    ->name('certificate-export-pdf');
