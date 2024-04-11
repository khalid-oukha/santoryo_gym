<?php

namespace App\Repositories;
use App\Models\Feature;
use App\Repositories\Interfaces\FeatureRepositoryInterface;

class FeatureRepository implements FeatureRepositoryInterface{

    public function all()
    {
        return Feature::all();
    }

    public function create(array $data)
    {
        return Feature::create($data);
    }

    public function find($id)
    {
        return Feature::find($id);
    }

    public function update($id, array $data)
    {
        return Feature::find($id)->update($data);
    }

    public function delete($id)
    {
        return Feature::find($id)->delete();
    }



}
