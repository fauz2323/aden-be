<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    Route::post('login', [App\Http\Controllers\Api\AuthController::class, 'login']);
    Route::post('register', [App\Http\Controllers\Api\AuthController::class, 'register']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('auth', [App\Http\Controllers\Api\AuthController::class, 'auth']);

        Route::get('food', [App\Http\Controllers\Api\FoodController::class, 'getFood']);
        Route::post('food/uuid', [App\Http\Controllers\Api\FoodController::class, 'getFoodByUuid']);
        Route::get('food/category', [App\Http\Controllers\Api\FoodController::class, 'foodType']);
        Route::post('food/byCategory', [App\Http\Controllers\Api\FoodController::class, 'getFoodByCategory']);

        //order
        Route::post('add/to/cart', [App\Http\Controllers\Api\OrderController::class, 'addToCart']);
        Route::get('get/cart', [App\Http\Controllers\Api\OrderController::class, 'getCart']);
        Route::get('set/order', [App\Http\Controllers\Api\OrderController::class, 'setOrder']);
        Route::post('get/order', [App\Http\Controllers\Api\OrderController::class, 'getDetailOrder']);
        Route::get('make/payment', [App\Http\Controllers\Api\OrderController::class, 'makePayment']);
    });
});
