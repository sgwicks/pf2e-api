<?php

use App\Http\Controllers\CharacterActionController;
use App\Http\Controllers\CharacterFeatController;
use App\Http\Controllers\CharacterCharacterClassController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CharacterSkillController;
use App\Http\Controllers\CharacterArmourController;
use App\Http\Controllers\CharacterSavingThrowController;
use App\Http\Controllers\CharacterMovementController;
use App\Http\Controllers\CharacterPerceptionController;
use App\Http\Controllers\CharacterHealthController;

Route::prefix('characters')
    ->name('characters.')
    ->group(function (){
        Route::get('/', [CharacterController::class, 'index'])->name('index');
        Route::get('/{character}', [CharacterController::class, 'show'])->name('show');
        Route::post('/', [CharacterController::class, 'store'])->name('store');
        Route::patch('/{character}', [CharacterController::class, 'update'])->name('update');
        Route::delete('/{character}', [CharacterController::class, 'destroy'])->name('destroy');

        Route::prefix('/{character}')
            ->group(function () {
                Route::prefix('/skills')
                    ->name('skills.')
                    ->group(function () {
                        Route::get('/', [CharacterSkillController::class, 'index'])->name('index');
                        Route::get('/{character_skill}', [CharacterSkillController::class, 'show'])->name('show');
                        Route::patch('/{character_skill}', [CharacterSkillController::class, 'update'])->name('update');
                    });

                Route::prefix('/feats')
                    ->name('feats.')
                    ->group(function () {
                        Route::get('/', [CharacterFeatController::class, 'index'])->name('index');
                        Route::post('/', [CharacterFeatController::class, 'store'])->name('store');
                        Route::get('/{character_feat}', [CharacterFeatController::class, 'show'])->name('show');
                        Route::delete('/{character_feat}', [CharacterFeatController::class, 'destroy'])->name('destroy');
                    });

                Route::prefix('/actions')
                    ->name('actions.')
                    ->group(function () {
                        Route::get('/', [CharacterActionController::class, 'index'])->name('index');
                        Route::post('/', [CharacterActionController::class, 'store'])->name('store');
                        Route::get('/{character_action}', [CharacterActionController::class, 'show'])->name('show');
                        Route::patch('/{character_action', [CharacterActionController::class, 'update'])->name('update');
                        Route::delete('/{character_action}', [CharacterActionController::class, 'destroy'])->name('destroy');
                    });

                Route::prefix('/character_classes')
                    ->name('character_classes.')
                    ->group(function () {
                        Route::get('/', [CharacterCharacterClassController::class, 'index'])->name('index');
                        Route::post('/', [CharacterCharacterClassController::class, 'store'])->name('store');
                        Route::get('/{character_class}', [CharacterCharacterClassController::class, 'show'])->name('show');
                        Route::patch('/{character_class}', [CharacterCharacterClassController::class, 'update'])->name('update');
                        Route::delete('/{character_class}', [CharacterCharacterClassController::class, 'destroy'])->name('destroy');
                    });
                
                Route::prefix('/armours')
                    ->name('armours.')
                    ->group(function () {
                        Route::get('/', [CharacterArmourController::class, 'index'])->name('index');
                        Route::post('/', [CharacterArmourController::class, 'store'])->name('store');
                        Route::get('/{armour}', [CharacterArmourController::class, 'show'])->name('show');
                        Route::delete('/{armour}', [CharacterArmourController::class, 'destroy'])->name('destroy');
                    });
                
                Route::prefix('/saving_throws')
                    ->name('saving_throws.')
                    ->group(function () {
                        Route::patch('/', [CharacterSavingThrowController::class, 'update'])->name('update');
                    });

                Route::prefix('/movement')
                    ->name('movement.')
                    ->group(function () {
                        Route::patch('/', [CharacterMovementController::class, 'update'])->name('update');
                    });

                Route::prefix('/perception')
                    ->name('perception.')
                    ->group(function () {
                        Route::patch('/', [CharacterPerceptionController::class, 'update'])->name('update');
                    });

                Route::prefix('/health')
                    ->name('health.')
                    ->group(function () {
                        Route::patch('/', [CharacterHealthController::class, 'update'])->name('update');
                    });
                });
    });
