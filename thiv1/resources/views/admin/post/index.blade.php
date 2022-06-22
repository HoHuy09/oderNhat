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
                <td><img src="{{asset('storage/'.$item->image)}}" width="100"></td>
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
@if ($post->hasPages())
    <!-- Pagination -->
    <div class="pull-right pagination">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($post->onFirstPage())
                <li class="disabled">
                    <span><i class="fa fa-angle-double-left"></i></span>
                </li>
            @else
                <li>
                    <a href="{{ $post->previousPageUrl() }}">
                        <span><i class="fa fa-angle-double-left"></i></span>
                    </a>
                </li>
            @endif 
            {{-- Pagination Elements --}}
            {{-- @if ($post->lastPage() > 1)
            <ul class="pagination">
             @for ($i = 1; $i <= $post->lastPage(); $i++)
                <li class="{{ ($post->currentPage() == $i) ? 'active' : '' }}">
            <a href="{{ $post->url($i) }}">{{ $i }}</a>
            </li>
            @endfor
            </ul>
            @endif --}}
                @for ($i = 1; $i <= $post->lastPage(); $i++)
                        @if ($i == $post->currentPage())
                            <li class="active"><span>{{ $i }}</span></li>
                        @elseif (($i == $post->currentPage() + 1 || $i == $post->currentPage() + 2) || $i == $post->lastPage())
                            <li><a href="{{ $post->url($i) }}">{{ $i }}</a></li>
                        @elseif ($i == $post->lastPage() - 1)
                            <li class="disabled"><span><i class="fa fa-ellipsis-h"></i></span></li>
                        @endif
                @endfor
               

            {{-- Next Page Link --}}
             @if ($post->hasMorePages())
                <li>
                    <a href="{{ $post->nextPageUrl() }}">
                        <span><i class="fa fa-angle-double-right"></i></span>
                    </a>
                </li>
            @else
                <li class="disabled">
                    <span><i class="fa fa-angle-double-right"></i></span>
                </li>
            @endif
        </ul>
    </div>
    @endif
    @endsection
