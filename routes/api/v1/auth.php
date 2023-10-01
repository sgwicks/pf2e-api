<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [AuthController::class, 'login']);

    Route::group([
        'prefix' => 'permissions'
    ], function () {
       Route::get('/', [PermissionController::class, 'index']);
    });

    Route::group([
        'prefix' => 'roles'
    ], function () {
        Route::get('/', [RoleController::class, 'index']);
    });
});
