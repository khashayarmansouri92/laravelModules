<?php

use Illuminate\Support\Facades\Route;
use V1\User\Http\Controllers\UserController;


Route::group([
    'namespaces' => 'V1\User\Http\Controllers',
    'middleware' => ['web']
]
, function ($router) {

        Route::get('/', [UserController::class, 'dashboard']);
        Route::get('login', [UserController::class, 'index'])->name('login');
        Route::post('login/store', [UserController::class, 'login'])->name('login-store');
        Route::get('registration', [UserController::class, 'registration'])->name('register-user');
        Route::post('registration/store', [UserController::class, 'register'])->name('register-store');
        Route::get('signout', [UserController::class, 'signOut'])->name('signout');

    });

