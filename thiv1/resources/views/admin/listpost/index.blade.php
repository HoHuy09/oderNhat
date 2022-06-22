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
@if ($listpost->hasPages())
    <!-- Pagination -->
    <div class="pull-right pagination">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($listpost->onFirstPage())
                <li class="disabled">
                    <span><i class="fa fa-angle-double-left"></i></span>
                </li>
            @else
                <li>
                    <a href="{{ $listpost->previousPageUrl() }}">
                        <span><i class="fa fa-angle-double-left"></i></span>
                    </a>
                </li>
            @endif 
            {{-- Pagination Elements --}}
            {{-- @if ($listpost->lastPage() > 1)
            <ul class="pagination">
             @for ($i = 1; $i <= $listpost->lastPage(); $i++)
                <li class="{{ ($listpost->currentPage() == $i) ? 'active' : '' }}">
            <a href="{{ $listpost->url($i) }}">{{ $i }}</a>
            </li>
            @endfor
            </ul>
            @endif --}}
                @for ($i = 1; $i <= $listpost->lastPage(); $i++)
                        @if ($i == $listpost->currentPage())
                            <li class="active"><span>{{ $i }}</span></li>
                        @elseif (($i == $listpost->currentPage() + 1 || $i == $listpost->currentPage() + 2) || $i == $listpost->lastPage())
                            <li><a href="{{ $listpost->url($i) }}">{{ $i }}</a></li>
                        @elseif ($i == $listpost->lastPage() - 1)
                            <li class="disabled"><span><i class="fa fa-ellipsis-h"></i></span></li>
                        @endif
                @endfor
               

            {{-- Next Page Link --}}
             @if ($listpost->hasMorePages())
                <li>
                    <a href="{{ $listpost->nextPageUrl() }}">
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
