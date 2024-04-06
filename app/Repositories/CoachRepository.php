<?php

namespace App\Repositories;

use App\Models\Coach;
use App\Repositories\Interfaces\CoachRepositoryInterface;

class CoachRepository implements CoachRepositoryInterface
{
    public function paginate($perPage = 5)
    {
        return Coach::paginate($perPage);
    }

    public function find($id)
    {
        return Coach::find($id);
    }

    public function create(array $data)
    {
        return Coach::create($data);
    }

    public function update($id, array $data)
    {
        $coach = Coach::find($id);
        if($coach){
            $coach->update($data);
            return $coach;
        }
        return false;
    }

    public function delete($id)
    {
        $coach = Coach::find($id);
        if($coach){
            $coach->delete();
            return true;
        }
        return false;
    }
}
