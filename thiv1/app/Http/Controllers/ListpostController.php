<?php

namespace App\Http\Controllers;

use App\Models\Listpost;
use Illuminate\Http\Request;

class ListpostController extends Controller
{
    public function index(Request $request){
        $listpost = Listpost::all();
        return view('admin.listpost.index',compact('listpost'));
    }
    public function addForm(){
        return view('admin.listpost.add');
    }
    public function saveAdd(Request $request){
        $model = new Listpost();
        $model->fill($request->all());
        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('public/products');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->image = $imgPath;
        }
        $model->save();
        return redirect(route('listpost.index'));
    }
    public function editForm($id,Request $request){  
        $listpost = Listpost::find($id);
        return view('admin.listpost.edit',compact('listpost'));
    }
    public function saveEdit($id,Request $request){
        $model = Listpost::find($id);
        $model->fill($request->all());
        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('public/products');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->image = $imgPath;
        }
        $model->save();
        return redirect(route('listpost.index'));
    }
    public function remove($id){
        Listpost::destroy($id);
        return redirect(route('listpost.index'));
    }
}
