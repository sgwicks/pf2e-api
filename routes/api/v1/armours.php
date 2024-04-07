<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArmourController;

Route::prefix('armours')
    ->name('armours.')
    ->group(function (){
        Route::get('/', [ArmourController::class, 'index'])->name('index');
        Route::get('/{armour}', [ArmourController::class, 'show'])->name('show');
        Route::post('/', [ArmourController::class, 'store'])->name('store');
        Route::patch('/{armour}', [ArmourController::class, 'update'])->name('update');
        Route::delete('/{armour}', [ArmourController::class, 'destroy'])->name('destroy');
        Route::post('/bulk-upload', [ArmourController::class, 'bulkUpload'])->name('bulkUpload');
    });
