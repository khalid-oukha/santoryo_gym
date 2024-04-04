<?php
namespace App\Repositories\Interfaces;

interface CategoryRepositoryInterface
{
    public function paginate($perPage = 5);
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
