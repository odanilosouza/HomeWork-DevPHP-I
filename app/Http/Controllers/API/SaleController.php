<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSaleRequest;
use App\Repositories\SaleRepository;
use App\Services\CommissionCalculator;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    protected $saleRepository;

    public function __construct(SaleRepository $saleRepository) {
        $this->saleRepository = $saleRepository;
    }

    public function index(Request $request)
    {
        $sales = $this->saleRepository->all();
        return response()->json($sales);
    }

    public function store(StoreSaleRequest $request)
    {
        $validatedData = $request->validated();

        $commission = CommissionCalculator::calculate($validatedData['value_sale']);

        $saleData = [
            'seller_id' => $validatedData['sellers_id'],
            'value_sale' => $validatedData['value_sale'],
            'commission' => $commission,
        ];

        $sale = $this->saleRepository->create($saleData);

        return response()->json($sale, 201);
    }

    public function show($sellerId)
    {        
        $sales = $this->saleRepository->findBySellerId($sellerId);
        return response()->json($sales);
    }

    public function destroy($id)
    {
        $this->saleRepository->delete($id);
        return response()->json(null, 204);
    }
}
