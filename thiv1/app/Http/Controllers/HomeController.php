<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::all()->sortByDesc('id')->take(5);
        $productnb = Product::all()->filter(function ($item) {
            return $item->status == 1;
        })->sortByDesc('id')->take(10);
        $category = Category::all();
        return view('home.home', compact('products', 'productnb', 'category'));
    }
    public function detail($id)
    {
        $product = Product::find($id);
        $sptt = Product::where('cate_id', $product->cate_id)->where('id', '!=', $id)->get()->take(4);
        $product->product_views = $product->product_views + 1;
        $product->save();
        return view('home.detail', compact('product','sptt'));
    }
    public function cate(){
        $cate = Category::all();
        $products = Product::all();
        return view('home.cate', compact('cate','products'));
        
    }
    public function category($id)
    {
        $cate = Category::all();
        $category = Category::find($id);
        $products = Product::where('cate_id', $id)->get();
        return view('home.category', compact('category', 'products', 'cate'));
    }
    public function search(Request $request)
    {
        $cate = Category::all();
        $products = Product::where('name', 'like', '%' . $request->search . '%')->get();
        return view('home.cate', compact('products', 'cate'));
    }
    public function catefilter(Request $request)
    {
        $model = $request->status;
        
        $cate = Category::all();
        $products = Product::where('status', $model)->get();
        return view('home.cate', compact('cate','products'));
    }
}
