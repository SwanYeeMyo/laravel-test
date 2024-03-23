<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\category\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
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

Route::get('categories',[CategoryController::class,'index'])->name('category.index');
Route::get('categories/create',[CategoryController::class,'create'])->name('category.create');
Route::post('categories/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category/{id}/edit',[CategoryController::class,'edit'])->name('category.edit');
Route::post('category/{id}/update',[CategoryController::class,'update'])->name('category.update');
Route::post('categories/{id}/delete',[CategoryController::class,'delete'])->name('category.delete');
Route::resource('users',UserController::class);

Route::resource('roles',RoleController::class);
Route::resource('permissions',PermissionController::class);
Route::resource('employee/',EmployeeController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
