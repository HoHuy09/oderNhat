@extends('admin.layouts.main')
@section('content-header')
    <h2>Post</h2>
@endsection
@section('content')
<table>
    <div class="card-body">
        <table class="table table-stripped">
    <thead>
        <th>STT</th>
        <th>tieu_de</th>
        <th>content1</th>
        <th>content2</th>
        <th>author</th>
        <th>email</th>
        <th>image</th>
        <th>listpost_id</th>
        <th>phone_number</th>
        <th>
            <a href="{{route('post.add')}}">Add</a>
        </th>
    </thead>
    <tbody>
        
        @foreach ($post as $item) 
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->tieu_de}}</td>
                <td>{{$item->content1}}</td>
                <td>{{$item->content2}}</td>
                <td>{{$item->author}}</td>
                <td>{{$item->email}}</td>
                <td><img src="{{asset($item->image)}}" width="100"></td>
                <td>{{$item->listpost->name}}</td>
                <td>{{$item->phone_number}}</td>
                <td>
                    <a href="{{route('post.edit', ['id' => $item->id])}}">Edit</a>
                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('post.remove', ['id' => $item->id])}}">Remove</a>
                </td>
            </tr>
        @endforeach 
    </tbody>
</table>
    @endsection
