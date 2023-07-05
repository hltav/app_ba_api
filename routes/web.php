<?php

use App\Http\Controllers\GithubUserController;
use Illuminate\Support\Facades\Route;

Route::get('users', [GithubUserController::class, 'index']);
Route::post('users', [GithubUserController::class, 'store']);
Route::put('users/{user}', [GithubUserController::class, 'update']);
Route::delete('users/{user}', [GithubUserController::class, 'destroy']);
