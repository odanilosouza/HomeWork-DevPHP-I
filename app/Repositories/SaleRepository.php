<?php 

namespace App\Repositories;

use App\Models\sale;

class VendaRepository extends BaseRepository
{
    public function __construct(Sale $sale)
    {
        parent::__construct($sale);
    }
}
