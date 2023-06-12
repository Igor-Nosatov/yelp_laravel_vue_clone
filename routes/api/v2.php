<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::prefix('v2')->group(function () {
    Route::get('test', function () {
        return response()->json(['message' => 'API V2 working']);
    });
});
