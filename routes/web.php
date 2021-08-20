<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhoneController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/users', [UserController::class, 'show']);

Route::group(['middleware' => 'auth'], function () {
    Route::prefix("category")->group(function () {
        Route::get('show', [CategoryController::class, 'show'])->name("show.category");
        Route::get("add",[CategoryController::class, 'CategoryAdd'])->name("category.add");
        Route::post("store",[CategoryController::class, 'CategoryStore'])->name("category.store");
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::prefix("post")->group(function () {
        Route::get('/show', [PostController::class, 'show']);
    });
});

Route::group(['middleware' => 'auth'], function () {
   Route::prefix("phone")->group(function () {
       Route::get("show",[PhoneController::class, "show"]);
   });
});
