<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ListpostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'postLogin']);
Route::any('logout', function(){
    Auth::logout();
    return redirect(route('login'));
});
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'saveregister']);
//User
Route::prefix('user')->middleware('auth')->group(function() {
    Route::get('/',[UsersController::class,'index'])->name('user.index');
    Route::get('add', [UsersController::class, 'addForm'])->name('user.add');
    Route::post('add', [UsersController::class, 'saveAdd']);
    Route::get('edit/{id}',[UsersController::class,'editForm'])->name('user.edit');
    Route::post('edit/{id}', [UsersController::class, 'saveEdit']);
    Route::get('remove/{id}',[UsersController::class,'remove'])->name('user.remove');
});
//Role
Route::prefix('role')->middleware('auth')->group(function() {
    Route::get('/',[RoleController::class,'index'])->name('role.index');
    Route::get('add', [RoleController::class, 'addForm'])->name('role.add');
    Route::post('add', [RoleController::class, 'saveAdd']);
    Route::get('edit/{id}',[RoleController::class,'editForm'])->name('role.edit');
    Route::post('edit/{id}', [RoleController::class, 'saveEdit']);
    Route::get('remove/{id}',[RoleController::class,'remove'])->name('role.remove');
});
//Product
Route::prefix('product')->middleware('auth')->group(function() {
    Route::get('/',[ProductController::class,'index'])->name('product.index');
    Route::get('add', [ProductController::class, 'addForm'])->name('product.add');
    Route::post('add', [ProductController::class, 'saveAdd']);
    Route::get('edit/{id}',[ProductController::class,'editForm'])->name('product.edit');
    Route::post('edit/{id}', [ProductController::class, 'saveEdit']);
    Route::get('remove/{id}',[ProductController::class,'remove'])->name('product.remove');
});
//Category
Route::prefix('category')->middleware('auth')->group(function() {
    Route::get('/',[CategoryController::class,'index'])->name('category.index');
    Route::get('add', [CategoryController::class, 'addForm'])->name('category.add');
    Route::post('add', [CategoryController::class, 'saveAdd']);
    Route::get('edit/{id}',[CategoryController::class,'editForm'])->name('category.edit');
    Route::post('edit/{id}', [CategoryController::class, 'saveEdit']);
    Route::get('remove/{id}',[CategoryController::class,'remove'])->name('category.remove');
});
//Post
Route::prefix('posts')->middleware('auth')->group(function() {
    Route::get('/',[PostsController::class,'index'])->name('post.index');
    Route::get('add', [PostsController::class, 'addForm'])->name('post.add');
    Route::post('add', [PostsController::class, 'saveAdd']);
    Route::get('edit/{id}',[PostsController::class,'editForm'])->name('post.edit');
    Route::post('edit/{id}', [PostsController::class, 'saveEdit']);
    Route::get('remove/{id}',[PostsController::class,'remove'])->name('post.remove');
});
//Listpost
Route::prefix('listpost')->middleware('auth')->group(function() {
    Route::get('/',[ListpostController::class,'index'])->name('listpost.index');
    Route::get('add', [ListpostController::class, 'addForm'])->name('listpost.add');
    Route::post('add', [ListpostController::class, 'saveAdd']);
    Route::get('edit/{id}',[ListpostController::class,'editForm'])->name('listpost.edit');
    Route::post('edit/{id}', [ListpostController::class, 'saveEdit']);
    Route::get('remove/{id}',[ListpostController::class,'remove'])->name('listpost.remove');
});