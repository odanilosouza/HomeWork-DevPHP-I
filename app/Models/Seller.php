<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = ['name', 'email'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
