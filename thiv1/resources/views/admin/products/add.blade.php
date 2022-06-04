@extends('admin.layouts.main')
@section('content-header')
    <h2>Add Product</h2>
@endsection
@section('content')
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="name"  class="form-control" placeholder="Nhập sản phẩm">
                </div> 
                @error('name')
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
                  <label for="">Price</label>
                  <input type="text" name="price" placeholder="Nhập giá" class="form-control" >
                </div> 
                @error('price')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="">Quantity</label>
                  <input type="number" name="quantity" placeholder="Nhập số lượng" class="form-control" >
                </div> 
                @error('quantity')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="">Link - Sản Phẩm</label>
                  <input type="text" name="link_sp" placeholder="Điền link sản phẩm" class="form-control" >
                </div> 
                @error('link_sp')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="">Category</label>
                    <select name="cate_id" class="form-control">
                        @foreach($category as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                  <label for="">Description</label>
                  <br>
                  <textarea name="description" id="" cols="70" rows="10"></textarea>
                </div> 
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
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