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
@if ($category->hasPages())
    <!-- Pagination -->
    <div class="pull-right pagination">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($category->onFirstPage())
                <li class="disabled">
                    <span><i class="fa fa-angle-double-left"></i></span>
                </li>
            @else
                <li>
                    <a href="{{ $category->previousPageUrl() }}">
                        <span><i class="fa fa-angle-double-left"></i></span>
                    </a>
                </li>
            @endif 
            {{-- Pagination Elements --}}
            {{-- @if ($category->lastPage() > 1)
            <ul class="pagination">
             @for ($i = 1; $i <= $category->lastPage(); $i++)
                <li class="{{ ($category->currentPage() == $i) ? 'active' : '' }}">
            <a href="{{ $category->url($i) }}">{{ $i }}</a>
            </li>
            @endfor
            </ul>
            @endif --}}
                @for ($i = 1; $i <= $category->lastPage(); $i++)
                        @if ($i == $category->currentPage())
                            <li class="active"><span>{{ $i }}</span></li>
                        @elseif (($i == $category->currentPage() + 1 || $i == $category->currentPage() + 2) || $i == $category->lastPage())
                            <li><a href="{{ $category->url($i) }}">{{ $i }}</a></li>
                        @elseif ($i == $category->lastPage() - 1)
                            <li class="disabled"><span><i class="fa fa-ellipsis-h"></i></span></li>
                        @endif
                @endfor
               

            {{-- Next Page Link --}}
             @if ($category->hasMorePages())
                <li>
                    <a href="{{ $category->nextPageUrl() }}">
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
