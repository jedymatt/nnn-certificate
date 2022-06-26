<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\VerifiedCertificateController;
use App\Http\Controllers\WelcomeController;
use App\Models\Certificate;
use Illuminate\Support\Facades\Route;
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


Route::get('/certificate/generate', [CertificateController::class, 'create'])
    ->name('certificate.generate');

Route::post('/certificate/generate', [CertificateController::class, 'store']);

Route::get('/certificate/view/{certificate:validation_key}', [CertificateController::class, 'show'])
    ->name('certificate.view');

Route::get('/certificate/verify', [VerifiedCertificateController::class, 'create'])
    ->name('certificate.verify');

Route::get('/certificate/verify/result/{certificate:validation_key}', [VerifiedCertificateController::class, 'show'])
    ->name('certificate.verify.result');
