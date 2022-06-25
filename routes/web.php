<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Certificate\GeneratedCertificateController;
use App\Http\Controllers\WelcomeController;
use App\Models\Certificate;
use Inertia\Inertia;

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

Route::get('/', [WelcomeController::class, 'show'])
    ->name('welcome');


Route::get('/certificates/generate', [GeneratedCertificateController::class, 'create'])
    ->name('certificates.generate');


Route::post('/certificates/generate', [GeneratedCertificateController::class, 'store']);

Route::get('/certificate/view/{certificate:validation_key}', function (Certificate $certificate) {
    return Inertia::render('ViewCertificatePage', [
        'certificate' => $certificate,
    ]);
})
    ->name('certificates.view');

Route::get('/verify-certificate/scanned/{certificate:validation_key}', function (Certificate $certificate) {
    return Inertia::render('ScannedCertificateVerificationPage', compact('certificate'));
})
    ->name('verify-certificate.scanned');
