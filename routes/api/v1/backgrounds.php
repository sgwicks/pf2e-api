<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackgroundController;

Route::prefix('backgrounds')
    ->name('backgrounds.')
    ->group(function (){
        Route::get('/', [BackgroundController::class, 'index'])->name('index');
        Route::get('/{background}', [BackgroundController::class, 'show'])->name('show');
        Route::post('/', [BackgroundController::class, 'store'])->name('store');
        Route::patch('/{background}', [BackgroundController::class, 'update'])->name('update');
        Route::delete('/{background}', [BackgroundController::class, 'destroy'])->name('destroy');
    });
