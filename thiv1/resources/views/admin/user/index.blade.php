@extends('admin.layouts.main')
@section('content-header')
    <h2>User</h2>
@endsection
@section('content')
<form class="row g-3">
    <div class="col-6">
      <label for="staticEmail2" class="visually-hidden">Từ khóa</label>
      <input type="text"  class="form-control-plaintext" name="keyword" id="staticEmail2" value="{{$searchData['keyword']}}" placeholder="Tìm theo name - email">
    </div>
    
    
    <div class="col-6">
      <button style="margin-top: 50px" type="submit" class="btn btn-primary mb-3">Tìm kiếm</button>
    </div>
  </form>
<table>
    <div class="card-body">
        <table class="table table-stripped">
    <thead>
        <th>STT</th>
        <th>Name</th>
        <th>Email</th>
        <th>Avatar</th>
        <th>Role_id</th>
        
        <th>
            <a href="{{route('user.add')}}">Add</a>
        </th>
    </thead>
    <tbody>
        
        @foreach ($user as $item) 
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td><img src="{{asset('storage/'.$item->avatar)}}" width="100"></td>
                <td>{{$item->roles->name}}</td>
                <td>
                    <a href="{{route('user.edit', ['id' => $item->id])}}">Edit</a>
                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('user.remove', ['id' => $item->id])}}">Remove</a>
                </td>
            </tr>
        @endforeach 
       
    </tbody>
</table>
@if ($user->hasPages())
    <!-- Pagination -->
    <div class="pull-right pagination">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($user->onFirstPage())
                <li class="disabled">
                    <span><i class="fa fa-angle-double-left"></i></span>
                </li>
            @else
                <li>
                    <a href="{{ $user->previousPageUrl() }}">
                        <span><i class="fa fa-angle-double-left"></i></span>
                    </a>
                </li>
            @endif 
            {{-- Pagination Elements --}}
            {{-- @if ($user->lastPage() > 1)
            <ul class="pagination">
             @for ($i = 1; $i <= $user->lastPage(); $i++)
                <li class="{{ ($user->currentPage() == $i) ? 'active' : '' }}">
            <a href="{{ $user->url($i) }}">{{ $i }}</a>
            </li>
            @endfor
            </ul>
            @endif --}}
                @for ($i = 1; $i <= $user->lastPage(); $i++)
                        @if ($i == $user->currentPage())
                            <li class="active"><span>{{ $i }}</span></li>
                        @elseif (($i == $user->currentPage() + 1 || $i == $user->currentPage() + 2) || $i == $user->lastPage())
                            <li><a href="{{ $user->url($i) }}">{{ $i }}</a></li>
                        @elseif ($i == $user->lastPage() - 1)
                            <li class="disabled"><span><i class="fa fa-ellipsis-h"></i></span></li>
                        @endif
                @endfor
               

            {{-- Next Page Link --}}
             @if ($user->hasMorePages())
                <li>
                    <a href="{{ $user->nextPageUrl() }}">
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
