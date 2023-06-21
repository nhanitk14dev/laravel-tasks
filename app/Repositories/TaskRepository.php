<?php

namespace App\Repositories;

use App\Models\Task;

class TaskRepository implements TaskRepositoryInterface
{
    private $model;

    public function __construct(Task $model)
    {
        $this->model = $model;
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function getAll()
    {
        return $this->model->orderByDesc('start_date')->get();
    }

    public function store($inputs = [])
    {
        return $this->model->create($inputs);
    }

    public function update($inputs, $id)
    {
        $task = $this->model->find($id);
        return $task ? $this->model->where('id', $id)->update($inputs) : null;
    }

    public function destroy($id)
    {
        $task = $this->model->find($id);
        return $task ? $this->model->destroy($id) : null;
    }

}
