<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Cartdetail;
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
        $user = $request->session()->get('user');
        isset($user) ? $user = $request->session()->get('user') : $user=[];
        return view('home.home', compact('products', 'productnb', 'category', 'cart','user'));
    }
    public function detail(Request $request,$id)
    {
        $product = Product::find($id);
        $sptt = Product::where('cate_id', $product->cate_id)->where('id', '!=', $id)->get()->take(4);
        $product->product_views = $product->product_views + 1;
        $product->save();
        $user = $request->session()->get('user');
        isset($user) ? $user = $request->session()->get('user') : $user=[];
       
        $cart = $request->session()->get('cart');
        isset($cart) ? $cart = $request->session()->get('cart') : $cart=[];
        $hasp = $product->productimage;
        return view('home.detail', compact('product','sptt','cart','hasp','user'));
    }
    public function cate(Request $request){
        $cate = Category::all();
        $products = Product::all();
        $cart = $request->session()->get('cart');
        isset($cart) ? $cart = $request->session()->get('cart') : $cart=[];
        $user = $request->session()->get('user');
        isset($user) ? $user = $request->session()->get('user') : $user=[];
        return view('home.cate', compact('cate','products','cart','user'));
        
    }
    public function category(Request $request,$id)
    {
        $cate = Category::all();
        $category = Category::find($id);
        $products = Product::where('cate_id', $id)->get();
        $cart = $request->session()->get('cart');
        isset($cart) ? $cart = $request->session()->get('cart') : $cart=[];
        $user = $request->session()->get('user');
        isset($user) ? $user = $request->session()->get('user') : $user=[];
        return view('home.category', compact('category', 'products', 'cate', 'cart','user'));
    }
    public function search(Request $request)
    {
        $cate = Category::all();
        $products = Product::where('name', 'like', '%' . $request->search . '%')->get();
        $cart = $request->session()->get('cart');
        isset($cart) ? $cart = $request->session()->get('cart') : $cart=[];
        $user = $request->session()->get('user');
        isset($user) ? $user = $request->session()->get('user') : $user=[];
        return view('home.cate', compact('products', 'cate', 'cart','user'));
    }
    public function catefilter(Request $request)
    {
        $model = $request->status;
        $cate = Category::all();
        $products = Product::where('status', $model)->get();
        $cart = $request->session()->get('cart');
        isset($cart) ? $cart = $request->session()->get('cart') : $cart=[];
        $user = $request->session()->get('user');
        isset($user) ? $user = $request->session()->get('user') : $user=[];
        return view('home.cate', compact('cate','products','cart','user'));
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
        $user = $request->session()->get('user');
        isset($user) ? $user = $request->session()->get('user') : $user=[];
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
        return view('home.checkout', compact( 'cart', 'total','quantity','user'));
    }
    public function introduce(Request $request)
    {
        $cart = $request->session()->get('cart');
        isset($cart) ? $cart = $request->session()->get('cart') : $cart=[];
        $user = $request->session()->get('user');
        isset($user) ? $user = $request->session()->get('user') : $user=[];
        return view('home.introduce', compact('cart','user'));
    }
    public function information(Request $request)
    {
        $cart = $request->session()->get('cart');
        if (!$cart) {
            return redirect()->route('home')->with('success', 'Your cart is empty!');
        }
        isset($cart) ? $cart = $request->session()->get('cart') : $cart=[];
        $user = $request->session()->get('user');
        isset($user) ? $user = $request->session()->get('user') : $user=[];
        return view('home.information', compact('cart','user'));
    }
    public function saveinformation(Request $request)
    {
        $cart = $request->session()->get('cart');
        
        isset($cart) ? $cart = $request->session()->get('cart') : $cart=[];
        
        $user = $request->session()->get('user');
        isset($user) ? $user = $request->session()->get('user') : $user=[];
        $macart = 'SP'.random_int(10000,1000000000);
        $total = 0;
        foreach ($cart as $key => $value) {
            $cartdetail = new Cartdetail();
            $cartdetail->cart_id = $macart;
            $cartdetail->product_id = $value['id'];
            $total += $value['price'] * $value['quantity'];
            $cartdetail->save();
        }
            $model = new Cart();
            $model->fill($request->all());
            if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('products');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->image = $imgPath;
            }
            $model->id = $macart;
            $model->total_price = $total;
            $model->count = count($cart);
            $model->status = 1;
            if($user != []){
            $model->user_id =  $user['id'];  
            }
            $model->save();
        return view('home.information', compact('cart','user'))->with('success', 'Tạo đơn thành công');
    }
    public function buynow(Request $request,$id)
    {
        $product = Product::find($id);
        $product->product_views = $product->product_views + 1;
        $product->save();
        $cart = $request->session()->get('cart');
        isset($cart) ? $cart = $request->session()->get('cart') : $cart=[];
        $user = $request->session()->get('user');
        isset($user) ? $user = $request->session()->get('user') : $user=[];
        $total = 0;
        $quantity = 0;
            $quantity = 1;
            $total = $product['price'] * $quantity;
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
            return view('home.checkout', compact('cart','user','total','quantity'))->with('success', 'Product added to cart successfully!');
        }
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return view('home.checkout', compact('cart','user','total','quantity'))->with('success', 'Product added to cart successfully!');
        } else {
            $cart[$id] = [
                'id' => $id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image
            ];
            session()->put('cart', $cart);
            return view('home.information', compact('cart','user','total','quantity'))->with('success', 'Product added to cart successfully!');
        }
    }
}
