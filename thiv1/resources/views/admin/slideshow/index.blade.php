@extends('admin.layouts.main')
@section('content-header')
    <h2>Slideshow</h2>
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
@if ($slideshow->hasPages())
    <!-- Pagination -->
    <div class="pull-right pagination">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($slideshow->onFirstPage())
                <li class="disabled">
                    <span><i class="fa fa-angle-double-left"></i></span>
                </li>
            @else
                <li>
                    <a href="{{ $slideshow->previousPageUrl() }}">
                        <span><i class="fa fa-angle-double-left"></i></span>
                    </a>
                </li>
            @endif 
            {{-- Pagination Elements --}}
            {{-- @if ($slideshow->lastPage() > 1)
            <ul class="pagination">
             @for ($i = 1; $i <= $slideshow->lastPage(); $i++)
                <li class="{{ ($slideshow->currentPage() == $i) ? 'active' : '' }}">
            <a href="{{ $slideshow->url($i) }}">{{ $i }}</a>
            </li>
            @endfor
            </ul>
            @endif --}}
                @for ($i = 1; $i <= $slideshow->lastPage(); $i++)
                        @if ($i == $slideshow->currentPage())
                            <li class="active"><span>{{ $i }}</span></li>
                        @elseif (($i == $slideshow->currentPage() + 1 || $i == $slideshow->currentPage() + 2) || $i == $slideshow->lastPage())
                            <li><a href="{{ $slideshow->url($i) }}">{{ $i }}</a></li>
                        @elseif ($i == $slideshow->lastPage() - 1)
                            <li class="disabled"><span><i class="fa fa-ellipsis-h"></i></span></li>
                        @endif
                @endfor
               

            {{-- Next Page Link --}}
             @if ($slideshow->hasMorePages())
                <li>
                    <a href="{{ $slideshow->nextPageUrl() }}">
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
