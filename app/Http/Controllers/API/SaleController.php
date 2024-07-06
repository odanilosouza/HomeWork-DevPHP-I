<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSaleRequest;
use App\Models\sale;
use App\Services\CommissionCalculator;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSaleRequest $request)
    {
        $sale = sale::create($request->all());
        $commission = CommissionCalculator::calculate($sale->value);
        $sale->update(['commission' => $commission]);
        return response()->json($sale, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($SallerId)
    {
        $sales = Sale::where('vendor_id', $SallerId)->get();
        return response()->json($sales);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
