<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\SpecieService;

class ProductController extends Controller
{
    protected $productService;
    protected $specieService;
    public function __construct(ProductService $productService, SpecieService $specieService)
    {
        $this->productService = $productService;
        $this->specieService = $specieService;
    }

    public function index(Request $request)
    {
        $products = $this->productService->index($request);
        return view('admin.product.index', compact('products'));
    }
    public function create (){
        $species = $this->specieService->getAll();
        return view('admin.product.create',compact('species'));
    }

    public function store(Request $request)
    {
        $product = $this->productService->store($request);

        if (is_null($product)) {
            return redirect()->route('admin.product.index')
                ->with('store', 'failed');
        }
        return redirect()->route('admin.product.index')
            ->with('store', 'success');
    }

    public function show($id)
    {
        $product = $this->productService->find($id);
        return view('admin.product.show', compact('product'));
    }

    public function edit($id)
    {
        $product = $this->productService->find($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update($request, $id)
    {
        $data = $request->all();
        $product = $this->productService->update($data, $id);
        if (is_null($product)) {
            return redirect()->route('admin.product.index')
                ->with('update', 'failed');
        }
        return redirect()->route('admin.product.index')
            ->with('update', 'success');
    }

    public function destroy($id)
    {
        $product = $this->productService->find($id);
        if (!$product->delete()) {
            return redirect()->route('admin.product.index')
                ->with('delete', 'failed');
        }
        return redirect()->route('admin.product.index')
            ->with('delete', 'success');
    }
}
