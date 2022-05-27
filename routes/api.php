<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\MoscowController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/moscow', [MoscowController::class, "index"]);
Route::get('/moscow/update', [MoscowController::class, "update"]);
