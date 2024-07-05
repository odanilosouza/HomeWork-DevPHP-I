<?php

use App\Http\Controllers\API\SellerController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/', SellerController::class);

Route::get('/', function () {
    return response()->json([
        'success' => true
    ]);
});