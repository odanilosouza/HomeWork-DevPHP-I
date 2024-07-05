<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    protected $fillable = ['sellers_id', 'value_sale', 'commission', 'data_sale'];

    public function seller() 
    {
        return $this->belongsTo(seller::class);
    }
}
