<?php

namespace App\Services;

use App\Repositories\DetailAnimalRepository;
use Illuminate\Support\Str;

class DetailAnimalService
{
    /**
     * @var DetailAnimalRepository
     */
    protected $detailAnimalRepository;

    public function __construct(DetailAnimalRepository $detailAnimalRepository)
    {
        $this->detailAnimalRepository = $detailAnimalRepository;
    }

    public function index($request)
    {
        $keywords = trim($request->keyword);
        if (!empty($keywords)) {
            $contains = Str::contains($keywords, ['%', '_', '\\']);
            if ($contains) {
                $keywords = str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $keywords);
            }
        }
        return $this->detailAnimalRepository->getIndex($keywords);
    }
    /**
     * @param $data
     * @return mixed
     */
    public function store($request)
    {
        $data =[
            'id_animals' => $request->id_amimals,
            'height' =>$request->height,
            'size' =>$request->size,
            'source' =>$request->source,
            'longevity'=>$request->longevity,
            'information' =>$request->information,
        ];
dd($data);
        return $this->detailAnimalRepository->create($data);

    }

    /**
     * @param int $id id of project
     * @return mixed
     */
    public function find(int $id)
    {
        return $this->detailAnimalRepository->find($id);
    }

    public function update($id, $attributes)
    {
        return $this->detailAnimalRepository->update($id, $attributes);
    }
}
