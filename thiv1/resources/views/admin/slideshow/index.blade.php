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
        <th>Image</th>
        <th>Link lk</th>
        <th>
            <a href="{{route('slideshow.add')}}">Add</a>
        </th>
    </thead>
    <tbody>
        
        @foreach ($slideshow as $item) 
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                    <img src="{{asset('storage/'.$item->image)}}" width="100px" height="100px">
                </td>
                <td><a href="{{$item->link_lk}}">{{$item->link_lk}}</a></td>
                <td>
                    <a href="{{route('slideshow.edit', ['id' => $item->id])}}">Edit</a>
                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('slideshow.remove', ['id' => $item->id])}}">Remove</a>
                </td>
            </tr>
        @endforeach 
       
    </tbody>
</table>
    @endsection
