<?php

use App\Http\Controllers\API\SaleController;
use App\Http\Controllers\API\SellerController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/sellers', SellerController::class);
Route::apiResource('/sales', SaleController::class);
