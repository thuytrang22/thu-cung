<?php

namespace App\Repositories;

use App\Models\Detail_Animal;

class DetailAnimalRepository extends BaseRepository
{
    public function model()
    {
        return Detail_Animal::class;
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
