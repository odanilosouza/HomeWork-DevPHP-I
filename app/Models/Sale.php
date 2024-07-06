<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['sellers_id', 'value_sale'];

    public function seller() 
    {
        return $this->belongsTo(seller::class);
    }
}