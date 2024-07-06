<?php

namespace App\Repositories;

use App\Models\Seller;

class VendedorRepository extends BaseRepository
{
    public function __construct(Seller $seller)
    {
        parent::__construct($seller);
    }
}
