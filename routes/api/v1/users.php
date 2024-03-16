<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserCharacterController;

Route::prefix('users')
    ->name('users.')
    ->group(function (){
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/{user}', [UserController::class, 'show'])->name('show');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::patch('/{user}', [UserController::class, 'update'])->name('update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');

        Route::prefix('/{user}/characters')
            ->name('characters.')
            ->group(function () {
                Route::post('/', [UserCharacterController::class, 'store'])->name('store');
            });
    });
