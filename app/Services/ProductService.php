<?php

namespace App\Services;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Support\Str;

class ProductService
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
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
        return $this->productRepository->getIndex($keywords);
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
            'name_product' => $request->name_product,
            'id_species' => $request->id_species,
            'image' => $hashName,
            'price'=>$request->price,
        ];
        $image->store('public');
        return $this->productRepository->create($data);

    }

    /**
     * @param int $id id of project
     * @return mixed
     */
    public function find(int $id)
    {
        return $this->productRepository->find($id);
    }

    public function update($id, $attributes)
    {
        return $this->productRepository->update($id, $attributes);
    }
}
