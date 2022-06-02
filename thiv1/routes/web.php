<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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
//User
Route::prefix('user')->group(function() {
    Route::get('/',[UsersController::class,'index'])->name('user.index');
    Route::get('add', [UsersController::class, 'addForm'])->name('user.add');
    Route::post('add', [UsersController::class, 'saveAdd']);
    Route::get('edit/{id}',[UsersController::class,'editForm'])->name('user.edit');
    Route::post('edit/{id}', [UsersController::class, 'saveEdit']);
    Route::get('remove/{id}',[UsersController::class,'remove'])->name('user.remove');
});
//Role
Route::prefix('role')->group(function() {
    Route::get('/',[RoleController::class,'index'])->name('role.index');
    Route::get('add', [RoleController::class, 'addForm'])->name('role.add');
    Route::post('add', [RoleController::class, 'saveAdd']);
    Route::get('edit/{id}',[RoleController::class,'editForm'])->name('role.edit');
    Route::post('edit/{id}', [RoleController::class, 'saveEdit']);
    Route::get('remove/{id}',[RoleController::class,'remove'])->name('role.remove');
});