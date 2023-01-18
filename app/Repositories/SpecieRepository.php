<?php

namespace App\Repositories;

use App\Models\Specie;

class SpecieRepository extends BaseRepository
{
    public function model()
    {
        return Specie::class;
    }

    public function getSpecies(){
        return $this->model->all();
    }
    public function getIndex($keywords)
    {
        $species = $this->model->query();
        if ($keywords) {
            $species->where('name', 'like', '%' . $keywords . '%');
        }
        return $species->orderBy('created_at', 'desc')->paginate(5);
    }
}
