<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AnimalService;

class AnimalController extends Controller
{
    protected $animalService;

    public function __construct(AnimalService $animalService)
    {
        $this->animalService = $animalService;
    }

    public function index(Request $request)
    {
        $animals = $this->animalService->index($request);
        return view('admin.animal.index', compact('animals'));
    }
    public function create (){
        return view('admin.animal.create');
    }
    public function store(Request $request)
    {
        $product = $this->animalService->store($request);
        if (is_null($product)) {
            return redirect()->route('admin.animal.index')
                ->with('store', 'failed');
        }
        return redirect()->route('admin.animal.index')
            ->with('store', 'success');
    }

    public function show($id)
    {
        $product = $this->animalService->find($id);
        return view('admin.animal.show', compact('product'));
    }

    public function edit($id)
    {
        $product = $this->animalService->find($id);
        return view('admin.animal.edit', compact('product'));
    }

    public function update($request, $id)
    {
        $data = $request->all();
        $product = $this->animalService->update($data, $id);
        if (is_null($product)) {
            return redirect()->route('admin.animal.index')
                ->with('update', 'failed');
        }
        return redirect()->route('admin.animal.index')
            ->with('update', 'success');
    }

    public function destroy($id)
    {
        $product = $this->animalService->find($id);
        if (!$product->delete()) {
            return redirect()->route('admin.animal.index')
                ->with('delete', 'failed');
        }
        return redirect()->route('admin.animal.index')
            ->with('delete', 'success');
    }
}
