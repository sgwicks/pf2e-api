<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeaponController;

Route::prefix('weapons')
    ->name('weapons.')
    ->group(function (){
        Route::get('/', [WeaponController::class, 'index'])->name('index');
        Route::get('/{weapon}', [WeaponController::class, 'show'])->name('show');
        Route::post('/', [WeaponController::class, 'store'])->name('store');
        Route::patch('/{weapon}', [WeaponController::class, 'update'])->name('update');
        Route::delete('/{weapon}', [WeaponController::class, 'destroy'])->name('destroy');

        //        Route::post('/bulk-upload');
    });
