@extends('admin.layouts.main')
@section('content-header')
    <h2>Categories</h2>
@endsection
@section('content')

<table>
    <div class="card-body">
        <table class="table table-stripped">
    <thead>
        <th>STT</th>
        <th>Name</th>
        <th>Image</th>
        <th>
            <a href="{{route('category.add')}}">Add</a>
        </th>
    </thead>
    <tbody>
        
        @foreach ($category as $item) 
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td><img src="{{asset('storage/'.$item->image)}}" width="100"></td>
                <td>
                    <a href="{{route('category.edit', ['id' => $item->id])}}">Edit</a>
                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('category.remove', ['id' => $item->id])}}">Remove</a>
                </td>
            </tr>
        @endforeach 
       
    </tbody>
</table>
@endsection
