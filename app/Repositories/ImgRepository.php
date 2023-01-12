<?php

namespace App\Repositories;

use App\Models\Category;

class ImgRepository extends BaseRepository
{
    public function model()
    {
        return Category::class;
    }

    public function getAlls($keywords)
    {
        $projects = $this->model->query();
        if ($keywords) {
            $projects->where('name', 'like', '%' . $keywords . '%');
        }
        return $projects->orderBy('created_at', 'desc')->paginate(5);
    }
}
