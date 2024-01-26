<?php

use Illuminate\Support\Facades\Route;

// Pada routes/web.php

use App\Http\Controllers\PendaftaranController;

Route::get('/pendaftaran', [PendaftaranController::class, 'create']);
Route::post('/pendaftaran', [PendaftaranController::class, 'store']);
Route::get('/pendaftaran/data', [PendaftaranController::class, 'index']);
Route::get('/pendaftaran/create', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
Route::post('/pendaftaran/store', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

Route::get('/', function () {
    return view('welcome');
});

