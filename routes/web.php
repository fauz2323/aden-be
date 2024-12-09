<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('web.auth.login');
})->name('login');


Route::get('log-out', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('food',[App\Http\Controllers\Admin\FoodController::class, 'index'])->name('food');
    Route::get('category',[App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category');
    Route::get('order-list',[App\Http\Controllers\Admin\OrderController::class, 'index'])->name('order');

    Route::get('profile',[App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('profile');
});
