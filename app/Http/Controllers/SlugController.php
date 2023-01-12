<?php

namespace App\Http\Controllers;

use App\Services\ImgService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\StoreImgRequest;

class SlugController extends Controller
{

    protected $imgService;

    public function __construct(ImgService $imgService){
        $this->imgService=$imgService ;
    }

    public function index(){
        return view('admin.img.index');
    }

    public function create(){
        return view('admin.img.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request;
        $slug = $this->imgService->store($request);
//        dd($slug);

        if (is_null($slug)) {
            return redirect()->route('admin.img.create')
                ->with('store', 'failed');
        }
        return redirect()->route('admin.img.create')
            ->with('store', 'success');
    }

}
