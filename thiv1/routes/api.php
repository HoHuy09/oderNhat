<?php

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('edit/{id}',[ProductController::class,'editForm']);
Route::post('edit/{id}', [ProductController::class, 'saveEdit']);

Route::get('user/edit/{id}',[ClientController::class,'editForm']);
Route::post('user/edit/{id}', [ClientController::class, 'saveEdit']);

Route::post('user/add/image/{id}', [ClientController::class, 'profileUpdateImage']);