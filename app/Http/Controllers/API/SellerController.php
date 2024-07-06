<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSellerRequest;
use App\Http\Requests\StoreUpdateUserRequest;
use App\Models\User;
use App\Http\Resources\UserResource;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SellerController extends Controller
{
    public function index()
    {
        return Seller::all();
    }

    public function store(StoreSellerRequest $request)
    {
    
       $seller = Seller::create($request->all());
       return response()->json($seller, 201);

    }
    public function show(string $id) 
    {
        return Seller::find($id);
    }

    public function update(StoreSellerRequest $request, $id)
    {
        $seller = Seller::find($id);
        $seller->update($request->all());

        return response()->json($seller, 200);

    }

    public function destroy($id)
    {
        Seller::find($id)->delete();
        return response()->json(null, 204);
    }

}
