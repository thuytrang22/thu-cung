<?php

namespace App\Services;

use App\Repositories\ImgRepository;
use Illuminate\Support\Str;

class ImgService
{
    /**
     * @var ProjectRepository
     */
    protected $imgRepository;

    public function __construct(ImgRepository $imgRepository)
    {
       $this->imgRepository = $imgRepository;
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
        return $this->imgRepository->getAlls($keywords);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function store($request)
    {

        $file = $request->file('slug');
        $fileName = $file->getClientOriginalName();
//        $fileName = pathinfo($file, PATHINFO_FILENAME);
        $hashName = $file->hashName();

        $image = [
            'name_slug' => $request->name_slug,
            'slug' => $hashName,
        ];
//        dd($image);

//        $imageName = time().'.'.$fileName->extension();
//        $d = $request->slug->move(public_path('public'), $fileName);
//        dd($d);
        $file->store('public');
        return $this->imgRepository->create($image);

    }

    /**
     * @param int $id id of project
     * @return mixed
     */
    public function find(int $id): mixed
    {
        return $this->imgRepository->find($id);
    }

    public function update($id, $attributes): mixed
    {
        return $this->imgRepository->update($id, $attributes);
    }
}
