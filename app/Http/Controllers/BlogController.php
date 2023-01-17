<?php

namespace App\Http\Controllers;

use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index(Request $request)
    {
        $species = $this->blogService->index($request);
        return view('admin.specie.index', compact('species'));
    }
    public function create (){
        return view('admin.specie.create');
    }
}
