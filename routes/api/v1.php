<?php

declare(strict_types=1);

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::resource('/home', HomeController::class)->only(['index']);
    Route::resource('/catalog', CatalogController::class)->only(['index', 'show']);
    Route::resource('/news', BlogController::class);
    Route::resource('/filters', FilterController::class)->only(['index']);
    Route::put('/user', [AuthController::class, 'update']);
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'signUp']);

