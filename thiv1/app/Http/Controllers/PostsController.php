<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostController;
use App\Http\Requests\SavePostRequest;
use App\Models\Listpost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request){
        $post = Post::all();
        return view('admin.post.index',compact('post'));
    }
    public function addForm(){
        $listpost = Listpost::all();
        return view('admin.post.add',compact('listpost'));
    }
    public function saveAdd(SavePostRequest $request){
        $model = new Post();
        $model->fill($request->all());
        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('products');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->image = $imgPath;
        }
        $model->save();
        return redirect(route('post.index'));
    }
    public function editForm($id,Request $request){  
        $post = Post::find($id);
        $listpost = Listpost::all();
        return view('admin.post.edit',compact('post','listpost'));
    }
    public function saveEdit($id,SavePostRequest $request){
        $model = Post::find($id);
        
        $model->fill($request->all());
        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('products');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->image = $imgPath;
        }
        $model->save();
        return redirect(route('post.index'));
    }
    public function remove($id){
        Post::destroy($id);
        return redirect(route('post.index'));
    }
}
