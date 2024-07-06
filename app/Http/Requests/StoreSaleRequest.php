<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSaleRequest extends FormRequest
{
    public function rules()
    {
        return [
            'sellers_id' =>'required|exists:sellers,id',
            'value_sale' => 'required|numeric',
            ];
    }
}