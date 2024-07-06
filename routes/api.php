<?php

use App\Http\Controllers\API\SaleController;
use App\Http\Controllers\API\SellerController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/sellers', SellerController::class);
Route::apiResource('/sales', SaleController::class);
/*
Route::get('/', function () {
    return response()->json([
        'success' => true
    ]);
});
*/