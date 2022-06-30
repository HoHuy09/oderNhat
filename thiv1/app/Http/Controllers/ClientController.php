<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request){
        $user = User::all()->where('role_id', 2);
        return view('admin.client.index',compact('user'));
    }
    public function addForm(){
        $category = Category::all();
        return view('admin.client.add',compact('category'));
    }
    public function saveAdd(SaveProductRequest $request){
    
        $model = new Product();
        $model->fill($request->all());
        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('public/products');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->image = $imgPath;
        }
        
        $model->save();
        return redirect(route('product.index'));
    }
    public function editForm($id,Request $request){  
        $product = Product::find($id);
        $category = Category::all();
        // return response()->json();
        return response(compact('category','product'), 200);
        // return  view('admin.products.edit',compact('category','product'));
    }
    public function saveEdit($id,SaveProductRequest $request){
        $model = Product::find($id);
        $model->fill($request->all());
        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('public/products');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->image = $imgPath;
        }
        
        $model->save();
        return redirect(route('product.index'));
    }
    public function remove($id){
        Product::destroy($id);
        return redirect(route('product.index'));
    }
}
