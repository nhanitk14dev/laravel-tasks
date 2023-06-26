<?php

namespace App\Repositories;

interface TaskRepositoryInterface
{
    public function find($id);
    public function getAll();
    public function store($inputs);
    public function update($inputs, $id);
    public function destroy($id);
    public function paginate($perPage = 10);
}
