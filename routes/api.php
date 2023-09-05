<?php

// use App\Http\Controllers\GithubUserController;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

//     Route::get('users', [GithubUserController::class, 'index']);
//     Route::post('users', [GithubUserController::class, 'store']);
//     Route::put('users/{user}', [GithubUserController::class, 'update']);
//     Route::delete('users/{user}', [GithubUserController::class, 'destroy']);

use App\Http\Controllers\GithubUserController;
use Illuminate\Support\Facades\Route;

Route::middleware('cors')->group(function () {
    Route::get('users', [GithubUserController::class, 'index']);
    Route::post('users', [GithubUserController::class, 'store']);
    Route::put('users/{user}', [GithubUserController::class, 'update']);
    Route::delete('users/{user}', [GithubUserController::class, 'destroy']);
});