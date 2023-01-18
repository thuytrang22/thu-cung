<?php

namespace App\Http\Controllers;

use App\Services\SpecieService;
use Illuminate\Http\Request;
use App\Services\AnimalService;

class AnimalController extends Controller
{
    protected $animalService;
    protected $specieService;


    public function __construct(AnimalService $animalService, SpecieService $specieService)
    {
        $this->animalService = $animalService;
        $this->specieService = $specieService;
    }

    public function index(Request $request)
    {
        $animals = $this->animalService->index($request);
        return view('admin.animal.index', compact('animals'));
    }
    public function create (){
        $species = $this->specieService->getAll();
        return view('admin.animal.create', compact('species'));
    }
    public function store(Request $request)
    {
        $animal = $this->animalService->store($request);
        if (is_null($animal)) {
            return redirect()->route('admin.animal.index')
                ->with('store', 'failed');
        }
        return redirect()->route('admin.animal.index')
            ->with('store', 'success');
    }

    public function show($id)
    {
        $animal = $this->animalService->find($id);
        return view('admin.animal.show', compact('animal'));
    }

    public function edit($id)
    {
        $animal = $this->animalService->find($id);
        return view('admin.animal.edit', compact('animal'));
    }

    public function update($request, $id)
    {
        $data = $request->all();
        $animal = $this->animalService->update($data, $id);
        if (is_null($animal)) {
            return redirect()->route('admin.animal.index')
                ->with('update', 'failed');
        }
        return redirect()->route('admin.animal.index')
            ->with('update', 'success');
    }

    public function destroy($id)
    {
        $animal = $this->animalService->find($id);
        if (!$animal->delete()) {
            return redirect()->route('admin.animal.index')
                ->with('delete', 'failed');
        }
        return redirect()->route('admin.animal.index')
            ->with('delete', 'success');
    }
}
