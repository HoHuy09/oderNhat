@extends('admin.layouts.main')
@section('content-header')
    <h2>Products</h2>
@endsection
@section('content')
<table>
    <div class="card-body">
        <table class="table table-stripped">
    <thead>
        <th>STT</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Link_Sp</th>
        <th>Image</th>
        <th>Category_id</th>
        <th>Status</th>
        <th>
            <a href="{{route('product.add')}}">Add</a>
        </th>
    </thead>
    <tbody>
        
        @foreach ($product as $item) 
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->link_sp}}</td>
                <td><img src="{{asset('storage/'.$item->image)}}" width="100"></td>
                <td>{{$item->category->name}}</td>
                @if ($item->status == 1)
                    <td>Hot</td>
                @else
                    <td>Bình thường</td>
                @endif
                
                <td>
                    <a href="{{route('product.edit', ['id' => $item->id])}}">Edit</a>
                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('product.remove', ['id' => $item->id])}}">Remove</a>
                </td>
            </tr>
        @endforeach 
       
    </tbody>
</table>
    @endsection
