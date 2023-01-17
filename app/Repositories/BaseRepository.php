<?php

namespace App\Repositories;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    public $model;

    abstract public function model();

    /**
     * @throws BindingResolutionException
     */
    public function __construct()
    {
        $this->makeModel();
    }

    /**
     * @return void
     * @throws BindingResolutionException
     */
    public function makeModel(): void
    {
        $this->model = app()->make($this->model());
    }

    /**
     * Retrieve all data of repository
     * @return Collection|Model[]
     */
//    public function getAll($columns = ['*']): array|Collection
//    {
//        return $this->model->all($columns);
//    }

    /**
     * Find an entity by id
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, array $columns = ['*'])
    {
        return $this->model->findOrFail($id, $columns);
    }

    /**
     * Save a new entity in repository
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
//        dd($this->model->create($attributes));
        try {
            $object = $this->model->create($attributes);
//            dd($object);
        } catch (\Exception $e) {
//            dd($this->model);

            return null;

        }

        return $object;
    }

    /**
     * Update an entity in repository by id
     *
     * @param array $attributes
     * @param $id
     * @return mixed
     */
    public function update(array $attributes, $id)
    {
        $object = $this->model->findOrFail($id);
        $object->fill($attributes);
        $object->save();

        return $object;
    }

    /**
     * Delete an entity in repository by id
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $object = $this->model->findOrFail($id);
        return $object->destroy($id);
    }
}
