<?php

namespace App\Http\Controllers;

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
        return view('home.home', compact('products', 'productnb'));
    }
    public function detail($id)
    {
        $product = Product::find($id);
        $product->product_views = $product->product_views + 1;
        $product->save();
        return view('home.detail', compact('product'));
    }
}
