<?php

namespace App\Http\Controllers;

use App\Services\AnimalService;
use App\Services\DetailAnimalService;
use Illuminate\Http\Request;

class DetailAnimalController extends Controller
{
    protected $detailAnimalService;
    protected $animalService;

    public function __construct(DetailAnimalService $detailAnimalService, AnimalService $animalService)
    {
        $this->animalService = $animalService;
        $this->detailAnimalService = $detailAnimalService;
    }

    public function index(Request $request)
    {
        $detail_animals = $this->animalService->index($request);
        return view('admin.detail_animal.index', compact('detail_animals'));
    }
    public function create (){
        $species = $this->detailAnimalService->getAll();
        return view('admin.animal.create', compact('species'));
    }
    public function store(Request $request)
    {
        $animal = $this->detailAnimalService->store($request);
        if (is_null($animal)) {
            return redirect()->route('admin.animal.index')
                ->with('store', 'failed');
        }
        return redirect()->route('admin.animal.index')
            ->with('store', 'success');
    }

    public function show($id)
    {
        $animal = $this->detailAnimalService->find($id);
        return view('admin.animal.show', compact('animal'));
    }

    public function edit($id)
    {
        $animal = $this->detailAnimalService->find($id);
        return view('admin.animal.edit', compact('animal'));
    }

    public function update($request, $id)
    {
        $data = $request->all();
        $animal = $this->detailAnimalService->update($data, $id);
        if (is_null($animal)) {
            return redirect()->route('admin.animal.index')
                ->with('update', 'failed');
        }
        return redirect()->route('admin.animal.index')
            ->with('update', 'success');
    }

    public function destroy($id)
    {
        $animal = $this->detailAnimalService->find($id);
        if (!$animal->delete()) {
            return redirect()->route('admin.animal.index')
                ->with('delete', 'failed');
        }
        return redirect()->route('admin.animal.index')
            ->with('delete', 'success');
    }
}
