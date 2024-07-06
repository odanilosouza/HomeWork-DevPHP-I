<?php

namespace App\Repositories;

use App\Models\Sale;

class SaleRepository {

    protected $model;

    public function __construct(Sale $model) {
        $this->model = $model;
    }

    public function all() {
        return $this->model->all();
    }

    public function create(array $attributes) {
        return $this->model->create($attributes);
    }

    public function findBySellerId(int $sellerId) {
        return $this->model->where('seller_id', $sellerId)->get();
    }

    public function delete(int $id) {
        $sale = $this->model->find($id);
        if ($sale) {
            $sale->delete();
        }
    }
}
