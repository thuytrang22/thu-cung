<?php

namespace App\Services;

use App\Models\Specie;
use App\Repositories\SpecieRepository;
use Illuminate\Support\Str;

class SpecieService
{
    /**
     * @var SpecieRepository
     */
    protected $specieRepository;

    public function __construct(SpecieRepository $specieRepository)
    {
        $this->specieRepository = $specieRepository;
    }

    public function getAll(){
        return $this->specieRepository->getSpecies();
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
        return $this->specieRepository->getIndex($keywords);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function store($data)
    {
        return $this->specieRepository->create($data);

    }

    /**
     * @param int $id id of project
     * @return mixed
     */
    public function find(int $id)
    {
        return $this->specieRepository->find($id);
    }

    public function update($id, $attributes)
    {
        return $this->specieRepository->update($id, $attributes);
    }
}
