<?php

namespace App\Services;

use App\Models\Specie;
use App\Repositories\BlogRepository;
use Illuminate\Support\Str;

class BlogService
{
    /**
     * @var BlogRepository
     */
    protected $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
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
        return $this->blogRepository->getIndex($keywords);
    }
}
