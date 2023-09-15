<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

Route::prefix('characters')
    ->name('characters.')
    ->group(function (){
        Route::get('/', [CharacterController::class, 'index'])->name('index');
        Route::get('/{character}', [CharacterController::class, 'show'])->name('show');
        Route::post('/', [CharacterController::class, 'store'])->name('store');
        Route::patch('/{character}', [CharacterController::class, 'update'])->name('update');
        Route::delete('/{character}', [CharacterController::class, 'destroy'])->name('destroy');
    });
