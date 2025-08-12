<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [ListingController::class, 'index']);

Route::middleware(['auth'])->group(function () {

    Route::get('/listings/create', [ListingController::class, 'create']);
    Route::post('/listings', [ListingController::class, 'store']);
    Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
    Route::put('/listings/{listing}', [ListingController::class, 'update']);
    Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);
    Route::post('/logout', [UserController::class, 'logout']);
    Route::get('/listings/manage', [ListingController::class,'manage']);
});

Route::middleware(['guest'])->group(function () {

    Route::get('/register', [UserController::class, 'create']);

    Route::get('/login', [UserController::class, 'login'])->name('login');

});

Route::get('/listings/{listing}', [ListingController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

