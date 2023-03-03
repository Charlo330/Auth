<?php

use App\Http\Controllers\TacheController;
use Illuminate\Support\Facades\Route;

    Route::resource('taches', TacheController::class)->except([
        'destroy'
    ])->parameters([
        'taches' => 'tache'
    ])->middleware(['auth', 'verified']);
