<?php

namespace App\Repositories;

use illuminate\Database\Eloquent\Model;

class BaseRepository implements RepositoriesInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }


    public function update($id, array $attributes)
    {
        $model = $this->model->findOrFail($id);
        $model->update($attributes);
        return $model;
    }

    public function delete($id)
    {
        $model = $this->model->findOrFail($id);
        $model->delete();
    }

}