<?php 
namespace App\Http\Repositories\Category;

use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface {
    public function index(){
        return Category::all();
    }
    public function store($params){
        // // dd($params);
        // $imageName = time() . '.' . $params['image']->getClientOriginalExtension();
        // // dd($imageName);
        // $params['image']->move(public_path('/uploadedImages'), $imageName);
        Category::create($params);
    }
}
?>