<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//can't use snake_case
//only use - like proudcts-lists (plural ko pl pay)

Route::get('/', function () {
    return view('welcome');
})->name('name.edit');
Route::get('/users/{id}',function($id){
    return "this is $id ";
});
Route::get('articles',[ArticleController::class,'index']);