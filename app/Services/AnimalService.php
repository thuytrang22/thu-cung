<?php

namespace App\Services;

use App\Models\Specie;
use App\Repositories\animalRepository;
use Illuminate\Support\Str;

class AnimalService
{
    /**
     * @var AnimalRepository
     */
    protected $animalRepository;

    public function __construct(AnimalRepository $animalRepository)
    {
        $this->animalRepository = $animalRepository;
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
        return $this->animalRepository->getIndex($keywords);
    }
    /**
     * @param $data
     * @return mixed
     */
    public function store($request)
    {
        $image =$request->file('image');
        $hashName = $image->hashName();
        $data = [
            'name_animal' => $request->name_animal,
            'image' => $hashName,
        ];
        $image->store('public');
        return $this->animalRepository->create($data);

    }

    /**
     * @param int $id id of project
     * @return mixed
     */
    public function find(int $id)
    {
        return $this->animalRepository->find($id);
    }

    public function update($id, $attributes)
    {
        return $this->animalRepository->update($id, $attributes);
    }
}
