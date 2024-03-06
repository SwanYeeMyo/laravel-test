<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = [
            ['id'=>1 , 'name'=> 'article One'],
            ['id'=>2 , 'name'=> 'article Two']
        ];
        return view('articles.index',compact('articles'));
        
    }
}
