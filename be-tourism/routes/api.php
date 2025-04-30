<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DestinasiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//posts
Route::apiResource('/user', App\Http\Controllers\Api\UserController::class);

Route::apiResource('destinasi', DestinasiController::class);
