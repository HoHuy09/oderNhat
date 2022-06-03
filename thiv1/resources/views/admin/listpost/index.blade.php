@extends('admin.layouts.main')
@section('content-header')
    <h2>ListPost</h2>
@endsection
@section('content')

<table>
    <div class="card-body">
        <table class="table table-stripped">
    <thead>
        <th>STT</th>
        <th>Name</th>
        <th>
            <a href="{{route('listpost.add')}}">Add</a>
        </th>
    </thead>
    <tbody>
        
        @foreach ($listpost as $item) 
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <a href="{{route('listpost.edit', ['id' => $item->id])}}">Edit</a>
                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('listpost.remove', ['id' => $item->id])}}">Remove</a>
                </td>
            </tr>
        @endforeach 
       
    </tbody>
</table>
@endsection
