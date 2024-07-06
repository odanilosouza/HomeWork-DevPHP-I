<?php

namespace App\Repositories;

use App\Models\Seller;

class SellerRepository {

    protected $model;

    public function __construct(Seller $model) {
        $this->model = $model;
    }

    public function all() {
        return $this->model->all();
    }

    public function create(array $attributes) {
        return $this->model->create($attributes);
    }

    public function find(string $id) {
        return $this->model->find($id);
    }

    public function update(array $attributes, string $id) {
        $seller = $this->model->find($id);
        $seller->update($attributes);
        return $seller;
    }

    public function delete(string $id) {
        $seller = $this->model->find($id);
        if ($seller) {
            $seller->delete();
        }
    }
}
