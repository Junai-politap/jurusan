<?php

use App\Http\Controllers\Base\BaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BaseController::class, 'index']);
Route::get('dosen-teknologi-informasi', [BaseController::class, 'dosenTI']);
Route::get('teknisi-teknologi-informasi', [BaseController::class, 'teknisiTI']);

Route::get('dosen-teknologi-listrik', [BaseController::class, 'dosenTE']);
Route::get('teknisi-teknologi-listrik', [BaseController::class, 'teknisiTE']);


Route::get('berita', [BaseController::class, 'berita']);
Route::get('berita/{berita}', [BaseController::class, 'show']);