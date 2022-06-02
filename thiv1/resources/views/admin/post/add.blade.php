@extends('admin.layouts.main')
@section('content-header')
    <h2>Add Post</h2>
@endsection
@section('content')
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" name="tieu_de"  class="form-control" placeholder="Nhập Title">
                </div> 
                @error('tieu_de')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-8">
                <div class="form-group">
                  <label for="">Content1</label>
                  <br>
                  <textarea name="content1" id="" cols="70" rows="10"></textarea>
                </div> 
                @error('content1')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-10">
                <div class="form-group">
                  <label for="">Content2</label>
                  <br>
                  <textarea name="content2" id="" cols="70" rows="10"></textarea>
                </div> 
                @error('content2')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="">Author</label>
                  <input type="text" name="author" placeholder="Nhập Author" class="form-control" >
                </div> 
                @error('author')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" name="email" placeholder="Nhập Email" class="form-control" >
                </div> 
                @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="">Image</label>
                  <input type="file" name="image" class="form-control" >
                </div> 
                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="">Phone_number</label>
                  <input type="text" name="phone_number" placeholder="Điền Phone_number" class="form-control" >
                </div> 
                @error('phone_number')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="">ListPost</label>
                    <select name="listpostid" class="form-control">
                        @foreach($listpost as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12 d-flex justify-content">
                
                <a href="{{route('product.index')}}" class="btn btn-danger">Hủy</a>
                &nbsp;
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </div>
    </form>
</div>
@endsection
