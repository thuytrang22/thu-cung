<?php

namespace App\Repositories;

use App\Models\DetailAnimal;

class DetailAnimalRepository extends BaseRepository
{
    public function model()
    {
        return DetailAnimal::class;
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
