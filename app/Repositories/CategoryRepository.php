<?php
namespace App\Repositories;
use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function paginate($perPage = 5)
    {
        return Category::paginate($perPage);
    }

    public function find($id)
    {
        return Category::find($id);
    }

    public function create(array $data)
    {
        return Category::create($data);
    }

    public function update($id, array $data)
    {
        $category = Category::find($id);
        if($category){
            $category->update($data);
            return $category;
        }
        return false;
    }

    public function delete($id)
    {
        $category = Category::find($id);
        if($category){
            $category->delete();
            return true;
        }
        return false;
    }
}