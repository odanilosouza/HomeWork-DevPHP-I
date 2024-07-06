<?php

namespace App\Repositories;

Interface RepositoriesInterface
{
    public function all();

    public function find($id);

    public function create(array $attributes);

    public function update($id, array $attributes);

    public function delete($id);

}