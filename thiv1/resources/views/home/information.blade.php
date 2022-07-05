@extends('home.layouts.main')
@section('header-title')
Giới thiệu
@endsection
@section('content')
      <div class="bg-gray-200 py-3 lg:block hidden">
          <div class="containers">
              <a href="">
                  <div class="text-sm flex hover:text-amber-600">
                      <i class="fas fa-home text-sm mr-3"></i>
                      <a href="{{route('home')}}"><h5 class="">Trang chủ</h5></a>
                  </div>
              </a>
          </div>
      </div>
  
      <!-- content -->
      <div class="containers mx-auto">
        <div class="grid grid-cols-12 mt-10 gap-10">
            <form action="" method="post" 
               
                class="col-span-6 border-l border-r border-b border-gray-300 pb-10 rounded-md shadow-lg">
                @csrf
                <h3 class="border-t-4 border-yellow-300 font-bold uppercase pt-5 px-5">1. Thông tin nhận hàng</h3>
                <div class="pt-10 px-5">
                    <h4 class="text-xs">Họ tên *</h4>
                    <input type="text" name="name" id=""
                        class="w-full border border-gray-300 outline-none pl-3 py-1 rounded-md">
                </div>

                <div class="mt-3  px-5">
                    <h4 class="text-xs">Địa chỉ *</h4>
                    <input type="text" name="address" id=""
                        class="w-full border border-gray-300 outline-none pl-3 py-1 rounded-md">
                </div>
                <div class="grid grid-cols-2 gap-5 px-5 mt-3">
                    <select class="w-full border border-gray-300 outline-none pl-3 py-2 rounded-md text-xs" >
                        <option value="">Tỉnh / Thành phố</option>
                    </select>
                    <select class="w-full border border-gray-300 outline-none pl-3 py-2 rounded-md text-xs" >
                        <option value="">Quận / Huyện</option>
                    </select>
                    <select class="w-full border border-gray-300 outline-none pl-3 py-2 rounded-md text-xs" >
                        <option value="">Thôn / Xã</option>
                    </select>
                </div>
                <div class="mt-3  px-5">
                    <h4 class="text-xs">Email *</h4>
                    <input type="text" name="email" id=""
                        class="w-full border border-gray-300 outline-none pl-3 py-1 rounded-md">
                </div>
                <div class="mt-3  px-5">
                    <h4 class="text-xs">Số điện thoại *</h4>
                    <input type="text" name="phone_number" id=""
                        class="w-full border border-gray-300 outline-none pl-3 py-1 rounded-md">
                </div>
                <div class="mt-3 px-5">
                    <h4 class="text-xs">Quốc gia *</h4>
                    <input type="text" name="nation" id=""
                        class="w-full border border-gray-300 outline-none pl-3 py-1 rounded-md">
                </div>
                <div class="mt-3 px-5">
                    <h4 class="text-xs">Mã zip *</h4>
                    <input type="text" name="zip" id=""
                        class="w-full border border-gray-300 outline-none pl-3 py-1 rounded-md">
                </div>
                <div class="text-center mt-10">
                    <button class="bg-red-500 px-8 py-2 w-36 rounded-md text-white text-sm">Hủy</button>
                    <button type="submit" class="bg-blue-500 px-8 py-2 rounded-md text-white w-36 text-sm">Xác nhận </button>
                </div>
            </form>
            <div class="col-span-6">
                <h4 class="font-bold uppercase mt-5">Thông tin đơn hàng</h4>
            </div>
        </div>
        
    
      <!--footer-->
    </div>
    <!-- header -->
    @endsection
