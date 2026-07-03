<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilDesaController;

Route::get('/', [ProfilDesaController::class, 'index'])->name('profil-desa');
