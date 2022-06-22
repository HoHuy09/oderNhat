<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $product = Product::paginate(5);
        
        return view('admin.products.index',compact('product'));
    }
    public function addForm(){
        $category = Category::all();
        return view('admin.products.add',compact('category'));
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
        return view('admin.products.edit',compact('category','product'));
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
