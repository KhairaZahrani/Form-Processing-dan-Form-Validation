<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


Route::get('/form-pendaftaran/{locale?}', [MahasiswaController::class, 'formPendaftaran']);
Route::post('/proses-form', [MahasiswaController::class, 'prosesForm']);
