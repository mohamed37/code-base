<?php

namespace App\Repositories;

use App\Contracts\BaseInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BaseRepository implements BaseInterface
{
    protected  $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all(): Collection
    {
        // TODO: Implement all() method.

        return $this->model->get();
    }
    public function paginate()
    {
        // TODO: Implement paginate() method.
        return $this->model->paginate(request('per_page', 10));
    }

    public function find(int $id): Model
    {
        // TODO: Implement find() method.
        return $this->model->findOrFail($id);
    }


    public function create(array $data): Model
    {
        // TODO: Implement create() method.
        return $this->model->create($data);
    }

    public function update(int $id, array $data): bool
    {
        // TODO: Implement update() method..

        return $this->model->update($id, $data);
    }

    public function delete(int $id): bool
    {
        // TODO: Implement delete() method.
        return $this->model->destroy($id);
    }


}
