<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;

Route::prefix('skills')
    ->name('skills.')
    ->group(function (){
        Route::get('/', [SkillController::class, 'index'])->name('index');
        Route::get('/{skill}', [SkillController::class, 'show'])->name('show');
        Route::post('/', [SkillController::class, 'store'])->name('store');
        Route::patch('/{skill}', [SkillController::class, 'update'])->name('update');
        Route::delete('/{skill}', [SkillController::class, 'destroy'])->name('destroy');

        Route::post('/bulk-upload', [SkillController::class, 'bulkUpload'])->name('bulkUpload');
    });
