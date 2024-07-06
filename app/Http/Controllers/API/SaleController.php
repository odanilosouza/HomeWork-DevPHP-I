<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSaleRequest;
use App\Models\Sale;
use App\Services\CommissionCalculator;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class SaleController extends Controller
{
  
    public function store(StoreSaleRequest $request)
    {
    $validatedData = $request->validated();

    $commission = CommissionCalculator::calculate($validatedData['value_sale']);

    $sale = new Sale();
    $sale->sellers_id = $validatedData['sellers_id'];
    $sale->value_sale = $validatedData['value_sale'];
    $sale->commission = $commission;

    $sale->save();

    return response()->json($sale, 201);
   
    }

    /**
     * Display the specified resource.
     */
    public function show($SalerId)
    {
        $sales = Sale::where('saler_id', $SalerId)->get();
        return response()->json($sales);
    }
}
