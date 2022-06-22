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
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Link_Sp</th>
        <th>Image</th>
        <th>Category_id</th>
        <th>Status</th>
        <th>Product_views</th>
        <th>
            <a href="{{route('product.add')}}">Add</a>
        </th>
    </thead>
    <tbody>
        
        @foreach ($product as $item) 
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->link_sp}}</td>
                <td><img src="{{asset('storage/'.$item->image)}}" width="100"></td>
                <td>{{$item->category->name}}</td>

                @if ($item->status == 1)
                    <td>Hot</td>
                @else
                    <td>Bình thường</td>
                @endif
                <td>{{$item->product_views}}</td>
                <td>
                    <a href="{{route('product.edit', ['id' => $item->id])}}">Edit</a>
                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('product.remove', ['id' => $item->id])}}">Remove</a>
                </td>
            </tr>
        @endforeach 
        
    </tbody>
</table>
    </div>
    @if ($product->hasPages())
    <!-- Pagination -->
    <div class="pull-right pagination">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($product->onFirstPage())
                <li class="disabled">
                    <span><i class="fa fa-angle-double-left"></i></span>
                </li>
            @else
                <li>
                    <a href="{{ $product->previousPageUrl() }}">
                        <span><i class="fa fa-angle-double-left"></i></span>
                    </a>
                </li>
            @endif 
            {{-- Pagination Elements --}}
            {{-- @if ($product->lastPage() > 1)
            <ul class="pagination">
             @for ($i = 1; $i <= $product->lastPage(); $i++)
                <li class="{{ ($product->currentPage() == $i) ? 'active' : '' }}">
            <a href="{{ $product->url($i) }}">{{ $i }}</a>
            </li>
            @endfor
            </ul>
            @endif --}}
                @for ($i = 1; $i <= $product->lastPage(); $i++)
                        @if ($i == $product->currentPage())
                            <li class="active"><span>{{ $i }}</span></li>
                        @elseif (($i == $product->currentPage() + 1 || $i == $product->currentPage() + 2) || $i == $product->lastPage())
                            <li><a href="{{ $product->url($i) }}">{{ $i }}</a></li>
                        @elseif ($i == $product->lastPage() - 1)
                            <li class="disabled"><span><i class="fa fa-ellipsis-h"></i></span></li>
                        @endif
                @endfor
               

            {{-- Next Page Link --}}
             @if ($product->hasMorePages())
                <li>
                    <a href="{{ $product->nextPageUrl() }}">
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
