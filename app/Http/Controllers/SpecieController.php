<?php

namespace App\Http\Controllers;

use App\Models\Specie;
use App\Services\SpecieService;
use Illuminate\Http\Request;

class SpecieController extends Controller
{
    protected $specieService;

    public function __construct(SpecieService $specieService)
    {
        $this->specieService = $specieService;
    }

    public function index(Request $request)
    {
        $species = $this->specieService->index($request);
        return view('admin.specie.index', compact('species'));
    }

    public function create()
    {
        return view('admin.specie.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $specie = $this->specieService->store($data);

        if (is_null($specie)) {
            return redirect()->route('admin.specie.index')
                ->with('store', 'failed');
        }
        return redirect()->route('admin.specie.index')
            ->with('store', 'success');
    }

    public function show($id)
    {
        $specie = $this->specieService->find($id);
        return view('admin.specie.show', compact('specie'));
    }

    public function edit($id)
    {
        $species = $this->specieService->find($id);
        return view('admin.specie.edit', compact('species'));
    }

    public function update($request, $id)
    {
        $data = $request->all();
        $specie = $this->specieService->update($data, $id);
        if (is_null($specie)) {
            return redirect()->route('admin.specie.index')
                ->with('update', 'failed');
        }
        return redirect()->route('admin.specie.index')
            ->with('update', 'success');
    }

    public function destroy($id)
    {
        $specie = $this->specieService->find($id);
        if (!$specie->delete()) {
            return redirect()->route('admin.specie.index')
                ->with('delete', 'failed');
        }
        return redirect()->route('admin.specie.index')
            ->with('delete', 'success');
    }
}
