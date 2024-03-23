<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Services\Category\CategoryServie;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    private $repository;
    public function __construct(CategoryServie $repository)
    {
        $this->repository = $repository;
        $this->middleware('auth');
    }
    public function index()
    {
        if(!Gate::allows('category_list')){
            abort(401);
        }

        // $categories = Category::all();
        $categories = $this->repository->index();
        // $categories = Category::orderBy('id','DESC')->get();
        return view('categories.index', compact('categories'));
    }
    public function create()
    {
        if(!Gate::allows('category_create')){
            abort(401);
        }
        return view('categories.create');
    }
    public function store(CategoryRequest $request)
    {
        if(!Gate::allows('category_store')){
        abort(401);
    }
        // dd($request->all());
        
        $this->repository->store($request->all());
        return redirect()->route('category.index');
    }
    public function edit($id)
    {
        if(!Gate::allows('category_edit')){
            abort(401);
        }
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        if(!Gate::allows('category_update')){
            abort(401);
        }
        // dd($request->all());
        //another way 
        //  $categoyr = Category::where('id',$id)->update([
        //         'name' => $request->name,
        //         'description' => $request->description,
        //         'status' => $request->status
        //     ]);
        $category = Category::find($id);
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status
        ]);
        return redirect()->route('category.index');
    }
    public function delete($id)
    {
        if(!Gate::allows('category_destory')){
            abort(401);
        }
        // $category = Category::where('id',$id)->first();
        // $category->delete();
        Category::where('id', $id)->delete();
        return redirect()->route('category.index');
    }
}
