<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class StoreSellerRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' =>'Required|String',
            'email'=> 'required|email|unique:sellers',
        ];
    }
}