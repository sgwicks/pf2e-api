<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShieldController;

Route::prefix('shields')
    ->name('shields.')
    ->group(function (){
        Route::get('/', [ShieldController::class, 'index'])->name('index');
        Route::get('/{shield}', [ShieldController::class, 'show'])->name('show');
        Route::post('/', [ShieldController::class, 'store'])->name('store');
        Route::patch('/{shield}', [ShieldController::class, 'update'])->name('update');
        Route::delete('/{shield}', [ShieldController::class, 'destroy'])->name('destroy');

        //        Route::post('/bulk-upload');
    });
