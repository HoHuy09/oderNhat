@extends('admin.layouts.main')
@section('content-header')
    <h2>Role</h2>
@endsection
@section('content')

<table>
    <div class="card-body">
        <table class="table table-stripped">
    <thead>
        <th>STT</th>
        <th>Name</th>
        <th>
            <a href="{{route('role.add')}}">Add</a>
        </th>
    </thead>
    <tbody>
        
        @foreach ($role as $item) 
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <a href="{{route('role.edit', ['id' => $item->id])}}">Edit</a>
                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('role.remove', ['id' => $item->id])}}">Remove</a>
                </td>
            </tr>
        @endforeach 
       
    </tbody>
</table>
@if ($role->hasPages())
    <!-- Pagination -->
    <div class="pull-right pagination">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($role->onFirstPage())
                <li class="disabled">
                    <span><i class="fa fa-angle-double-left"></i></span>
                </li>
            @else
                <li>
                    <a href="{{ $role->previousPageUrl() }}">
                        <span><i class="fa fa-angle-double-left"></i></span>
                    </a>
                </li>
            @endif 
            {{-- Pagination Elements --}}
            {{-- @if ($role->lastPage() > 1)
            <ul class="pagination">
             @for ($i = 1; $i <= $role->lastPage(); $i++)
                <li class="{{ ($role->currentPage() == $i) ? 'active' : '' }}">
            <a href="{{ $role->url($i) }}">{{ $i }}</a>
            </li>
            @endfor
            </ul>
            @endif --}}
                @for ($i = 1; $i <= $role->lastPage(); $i++)
                        @if ($i == $role->currentPage())
                            <li class="active"><span>{{ $i }}</span></li>
                        @elseif (($i == $role->currentPage() + 1 || $i == $role->currentPage() + 2) || $i == $role->lastPage())
                            <li><a href="{{ $role->url($i) }}">{{ $i }}</a></li>
                        @elseif ($i == $role->lastPage() - 1)
                            <li class="disabled"><span><i class="fa fa-ellipsis-h"></i></span></li>
                        @endif
                @endfor
               

            {{-- Next Page Link --}}
             @if ($role->hasMorePages())
                <li>
                    <a href="{{ $role->nextPageUrl() }}">
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
