<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    Route::post('login', [App\Http\Controllers\Api\AuthController::class, 'login']);
    Route::post('register',[App\Http\Controllers\Api\AuthController::class, 'register']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('auth', [App\Http\Controllers\Api\AuthController::class, 'auth']);

        Route::get('food', [App\Http\Controllers\Api\FoodController::class, 'getFood']);
        Route::post('food/uuid', [App\Http\Controllers\Api\FoodController::class, 'getFoodByUuid']);
        Route::get('food/type', [App\Http\Controllers\Api\FoodController::class, 'foodType']);
        Route::post('food/category', [App\Http\Controllers\Api\FoodController::class, 'getFoodByCategory']);
    });
});
