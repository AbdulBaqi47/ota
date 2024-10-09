<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class BaseRepository
{
    /**
     * @var Builder
     */
    protected Builder $query;

    /**
     * @param  Model  $model
     * @return void
     */
    public function __construct(protected Model $model)
    {
        $this->query = $this->model->newQuery();
    }

    /**
     * @return Collection
     */
    public function get(): Collection
    {
        return $this->query->get();
    }

    /**
     * @return Model
     */
    public function first(): Model
    {
        return $this->query->first();
    }

    /**
     * @param  int|string  $id
     * @param  array  $columns
     * @return Model
     */
    public function find(int|string $id, array $columns = []): Model
    {
        return $this->query->find($id, $columns);
    }

    /**
     * @param  int|string  $id
     * @param  array  $columns
     * @return Model
     */
    public function findOrFail(int|string $id, array $columns = []): Model
    {
        return $this->query->findOrFail($id, $columns);
    }

    /**
     * @param  array  $data
     * @return Model
     */
    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    /**
     * @param  int|string  $id
     * @param  array  $data
     * @return Model
     */
    public function update(int|string $id, array $data): Model
    {
        $model = $this->findOrFail($id);
        $model->update($data);
        return $model;
    }

    /**
     * @param  int|string  $id
     * @return Model
     */
    public function delete(int|string $id): Model
    {
        $model = $this->findOrFail($id);
        $model->delete();
        return $model;
    }

    /**
     * @param  int|string  $id
     * @return Model
     */
    public function destroy(int|string $id): Model
    {
        $model = $this->findOrFail($id);
        $model->forceDelete();
        return $model;
    }

    /**
     * @param  array  $relations
     * @return BaseRepository
     */
    public function with(array $relations): self
    {
        $this->query->with($relations);
        return $this;
    }

    /**
     * @return Model
     */
    public function model(): Model
    {
        return $this->model;
    }

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        return $this->query;
    }

    /**
     * @return Builder
     */
    public function resetQuery(): Builder
    {
        $this->query = $this->model->newQuery();
        return $this->query;
    }
}
