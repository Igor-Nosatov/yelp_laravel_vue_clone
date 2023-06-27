<?php

declare(strict_types=1);

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('home', HomeController::class)->only(['index']);
    Route::apiResource('catalog', CatalogController::class)->only(['index', 'show']);
    Route::apiResource('filters', FilterController::class)->only(['index']);
    Route::apiResource('account', AccountController::class);
    Route::apiResource('review', ReviewController::class)->except(['index']);
    Route::apiResource('blog', BlogController::class);
    Route::apiResource('business', BusinessController::class)->except(['index']);
    Route::apiResource('event', EventController::class);
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'signUp']);

