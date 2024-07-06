<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSellerRequest;
use App\Http\Requests\StoreUpdateUserRequest;
use App\Models\Seller;
use App\Repositories\SellerRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SellerController extends Controller
{
    protected $sellerRepository;

    public function __construct(SellerRepository $sellerRepository) {
        $this->sellerRepository = $sellerRepository;
    }
    
    public function index()
    {
        $sellers = $this->sellerRepository->all();
        return response()->json($sellers);
    }

    public function store(StoreSellerRequest $request)
    {
        $seller = $this->sellerRepository->create($request->all());
        return response()->json($seller, 201);
    }

    public function show(string $id) 
    {
        $seller = $this->sellerRepository->find($id);
        return response()->json($seller);
    }

    public function update(StoreSellerRequest $request, $id)
    {
        $seller = $this->sellerRepository->update($request->all(), $id);
        return response()->json($seller, 200);
    }

    public function destroy($id)
    {
        $this->sellerRepository->delete($id);
        return response()->json(null, 204);
    }

}
