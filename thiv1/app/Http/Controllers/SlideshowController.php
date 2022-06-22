<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveSlideShow;
use App\Models\Slideshow;
use Illuminate\Http\Request;

class SlideshowController extends Controller
{
    public function index()
    {
        $slideshow = Slideshow::paginate(5);
        return view('admin.slideshow.index', compact('slideshow'));
    }
    public function addForm()
    {
        return view('admin.slideshow.add');
    }
    public function saveAdd(SaveSlideShow $request)
    {
        $model = new Slideshow();
        $model->fill($request->all());
        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('public/products');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->image = $imgPath;
        }
        $model->save();
        return redirect()->route('slideshow.index')->with('msg', 'Thêm thành công');
    }
    public function editForm($id)
    {
        $slideshow = Slideshow::find($id);
        return view('admin.slideshow.edit', compact('slideshow'));
    }
    public function saveEdit(SaveSlideShow $request, $id)
    {
        $model = Slideshow::find($id);
        $model->fill($request->all());
        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('public/products');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->image = $imgPath;
        }
        $model->save();
        return redirect()->route('slideshow.index')->with('msg', 'Sửa thành công');
    }
    public function remove($id)
    {
        $model = Slideshow::find($id);
        $model->delete();
        return redirect()->route('slideshow.index')->with('msg', 'Xóa thành công');
    }
    
}
