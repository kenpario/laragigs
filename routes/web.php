<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [ListingController::class,'index']);

Route::get('/listings/create', [ListingController::class,'create']);

Route::post('/listings', [ListingController::class,'store']);

Route::get('/listings/{listing}/edit', [ListingController::class,'edit']);

Route::put('/listings/{listing}', [ListingController::class,'update']);

Route::delete('/listings/{listing}', [ListingController::class,'destroy']);

Route::get('/listings/{listing}', [ListingController::class,'show']);


