<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function doashboard(){
        return view('admin.doashboard.index');
    }
    public function statistical(){
        return view('admin.statistical.index');
    }
}
