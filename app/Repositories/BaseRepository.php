<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;

abstract class BaseRepository implements RepositoryInterface
{
    protected $model;

    public function getAll(array $input = [])
    {
        return $this->model->all();
    }

    public function paginate(array $input = [], $perPage = 10)
    {
        $query = $this->model->query();

        return $query->orderBy('id')->paginate($perPage);
    }

    public function save(array $inputs, array $conditions = ['id' => null])
    {
        return $this->model->updateOrCreate($conditions, $inputs);
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function deleteById($id)
    {
        return $this->model->destroy($id);
    }
}