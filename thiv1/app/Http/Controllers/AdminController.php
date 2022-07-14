<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function doashboard(){
        return view('admin.doashboard.index');
    }
    public function statistical(){
        return view('admin.statistical.index');
    }
    public function carts(){
        $carts = Cart::paginate(10);
        return view('admin.carts.index',compact('carts'));
    }
}
