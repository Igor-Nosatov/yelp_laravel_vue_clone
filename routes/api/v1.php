<?php

declare(strict_types=1);

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FilterController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('test', function () {
        return response()->json(['message' => 'API V1 working']);
    });
    Route::resource('catalog', CatalogController::class)->only(['index', 'show']);
    Route::resource('news', BlogController::class);
    Route::resource('filters', FilterController::class)->only(['index']);
});
