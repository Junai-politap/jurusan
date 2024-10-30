<?php

use App\Http\Controllers\Base\BaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BaseController::class, 'index']);
Route::get('pegawai', [BaseController::class, 'pegawai']);
Route::get('berita', [BaseController::class, 'berita']);
Route::get('berita/{berita}', [BaseController::class, 'show']);