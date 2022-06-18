<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        
        $products = Product::all()->sortByDesc('id')->take(5);
        $productnb = Product::all()->filter(function ($item) {
            return $item->status == 1;
        })->sortByDesc('id')->take(10);
        $category = Category::all();
        $cart = $request->session()->get('cart');
        isset($cart) ? $cart = $request->session()->get('cart') : $cart=[];
        return view('home.home', compact('products', 'productnb', 'category', 'cart'));
    }
    public function detail(Request $request,$id)
    {
        $product = Product::find($id);
        $sptt = Product::where('cate_id', $product->cate_id)->where('id', '!=', $id)->get()->take(4);
        $product->product_views = $product->product_views + 1;
        $product->save();
        $user = $request->session()->get('user');
        
        $cart = $request->session()->get('cart');
        isset($cart) ? $cart = $request->session()->get('cart') : $cart=[];
        
        return view('home.detail', compact('product','sptt','cart'));
    }
    public function cate(Request $request){
        $cate = Category::all();
        $products = Product::all();
        $cart = $request->session()->get('cart');
        isset($cart) ? $cart = $request->session()->get('cart') : $cart=[];
        return view('home.cate', compact('cate','products','cart'));
        
    }
    public function category(Request $request,$id)
    {
        $cate = Category::all();
        $category = Category::find($id);
        $products = Product::where('cate_id', $id)->get();
        $cart = $request->session()->get('cart');
        isset($cart) ? $cart = $request->session()->get('cart') : $cart=[];
        return view('home.category', compact('category', 'products', 'cate', 'cart'));
    }
    public function search(Request $request)
    {
        $cate = Category::all();
        $products = Product::where('name', 'like', '%' . $request->search . '%')->get();
        $cart = $request->session()->get('cart');
        isset($cart) ? $cart = $request->session()->get('cart') : $cart=[];
        return view('home.cate', compact('products', 'cate', 'cart'));
    }
    public function catefilter(Request $request)
    {
        $model = $request->status;
        $cate = Category::all();
        $products = Product::where('status', $model)->get();
        $cart = $request->session()->get('cart');
        isset($cart) ? $cart = $request->session()->get('cart') : $cart=[];
        return view('home.cate', compact('cate','products','cart'));
    }
    public function addcart(Request $request,$id)
    {
        $product = Product::find($id);
        $product->product_views = $product->product_views + 1;
        $product->save();
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [
                 $id => [
                    'id' => $id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => 1,
                    'image' => $product->image
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        } else {
            $cart[$id] = [
                'id' => $id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
    }
    public function removecart(Request $request,$id)
    {
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product removed successfully!');
        }
    }
    public function cart(Request $request)
    {
        // $user = $request->session()->get('user');
        // if(isset($user)){
        //     $product = Cart::where('user_id', $userid)->get();
        // }else{
        //     return redirect()->route('login');
        // }
        $cart = session()->get('cart');
        if (!$cart) {
            return redirect()->route('home')->with('success', 'Your cart is empty!');
        }
        $total = 0;
        $quantity = 0;
        foreach ($cart as $key => $value) {
            $total += $value['price'] * $value['quantity'];
            $quantity += $value['quantity'];
        }
        return view('home.checkout', compact( 'cart', 'total','quantity'));
    }
    public function introduce(Request $request)
    {
        $cart = $request->session()->get('cart');
        isset($cart) ? $cart = $request->session()->get('cart') : $cart=[];
        return view('home.introduce', compact('cart'));
    }
}
