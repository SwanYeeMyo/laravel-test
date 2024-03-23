<?php

namespace App\Http\Services\Category;

use App\Http\Repositories\Category\CategoryRepository;
use App\Http\Repositories\Category\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryServie
{
    private $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    public function index()
    {
        return $this->categoryRepository->index();
    }
    public function store($params)
    {
        // dd($params);
        $imageName = time() . '.' . $params['image']->getClientOriginalExtension();
        // dd($imageName);
        $params['image']->move(public_path('/uploadedImages'), $imageName);
        $params['image'] = $imageName;
        return $this->categoryRepository->store($params);
    }
}
