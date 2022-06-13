<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./index.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/79e1832a3e.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.15.0/dist/full.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="{{ asset('website') }}/index.css" />
</head>

<body>
  <!-- header -->
  <div class="bg-amber-600 sticky top-0 z-10">
    <div class="containers py-4">
      <div class="grid grid-cols-12 gap-10">
        <div class="col-span-2 mx-auto">
          <a href="{{route('home')}}">
            <img class="h-10" src="{{asset('storage/anhweb/logo 2c.png')}}" alt="" />
          </a>
        </div>
        <div class="col-span-7">
          <div class="relative">
            <form action="{{route('search')}}" method="POST">
              @csrf
              <input type="text" name="search" class="w-full p-1 mt-1 pr-20 rounded-md" />
              <button type="submit"><i class="fas fa-search absolute top-3 right-6"></i></button>
            </form>
          </div>
        </div>
        <div class="col-span-3 ml-auto flex gap-10 mt-1">
          <div class="text-2xl text-white relative" x-data="{ open: false }" @mouseleave="open = false">
            <div @mouseover="open = true">
              <i class="fas fa-user"></i>
            </div>

            <div class="absolute bg-white w-52 right-0 mt-2 bg-white shadow-xl" x-show="open" x-transition.scale.origin.right>
              <div class="py-2 px-5">
                <a href="#" class="block p-1 text-gray-700">
                  <i class="fas fa-user text-xl"></i>
                  <span class="ml-2 text-sm">Profile</span>
                </a>
                <a href="#" class="block p-1 text-gray-700">
                  <i class="fas fa-cog text-xl"></i>
                  <span class="ml-2 text-sm">Settings</span>
                </a>
                <a href="#" class="block p-1 text-gray-700">
                  <i class="fas fa-sign-out-alt text-xl"></i>
                  <span class="ml-2 text-sm">Logout</span>
                </a>
              </div>
            </div>
          </div>
          <div>
            <i class="fas fa-gavel text-2xl text-white"></i>
          </div>
          <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
            <div @mouseover="open = true">
              <i class="fab fa-opencart text-2xl text-white block"></i>
            </div>
            <div x-show="open" x-transition.scale.origin.right class="absolute bg-white w-72 right-0 py-24 mt-2 bg-white shadow-xl">
              <img class="w-full px-20" src="./image/cart-empty.svg" alt="" />
              <div class="text-center">
                <h4 class="font-bold mt-3">Giỏ hàng trống!</h4>
                <p class="text-xs mt-3">
                  không có sản phẩm trong giỏ hàng của bạn
                </p>
              </div>
            </div>
          </div>
          <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
            <div @mouseover="open = true">
              <i class="fas fa-bell text-2xl text-white"></i>
            </div>
            <div x-show="open" x-transition.scale.origin.right class="absolute bg-white w-72 pb-32 right-0 pt-5 pl-5 mt-2 bg-white shadow-xl">
              <h4 class="font-bold">Thông báo</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="containers grid lg:grid-cols-12  py-3">
    <div class="col-span-2 flex border-r pl-3 border-gray-400">
      <i class="fas fa-bars mt-1 mr-3"></i>
      <h4 class="">Tất cả danh mục</h4>
    </div>
    <div class="col-span-8 flex px-10 gap-10">
      <div>
        <a class="flex" href="#">
          <i class="fab fa-battle-net text-xl text-amber-600 mr-2"></i>
          <h4 class="font-bold">Market</h4>
        </a>
      </div>
      <div>
        <a class="flex" href="#">
          <i class="fas fa-truck text-amber-600 text-xl mr-2"></i>
          <h4 class="font-bold">Express</h4>
        </a>
      </div>
      <div>
        <a class="flex" href="#">
          <i class="fas fa-fire-alt text-amber-600 text-xl mr-2"></i>
          <h4 class="mt-1 font-bold">Ưu đãi</h4>
        </a>
      </div>
    </div>
    <div class="col-span-2 flex">
      <i class="fas fa-home text-xl text-amber-600 mr-2"></i>
      <h4 class="font-bold mt-1">Bán ở nhật bản</h4>
    </div>
  </div>
  <div class="bg-gray-200 py-3">
    <div class="containers">
      <a href="">
        <div class="text-sm flex hover:text-amber-600">
          <i class="fas fa-home text-sm mr-3"></i>
          <a href="{{route('home')}}" class="">Trang chủ</a>
        </div>
      </a>
    </div>
  </div>
  <!-- content -->
  <div class="containers mt-10 grid grid-cols-2">
    <div class="">
      <h4 class="font-bold">Danh mục</h4>
    </div>
    <div class="ml-auto">
      <select class="py-1 text-sm appearance-none px-10 border border-gray-400">
        <option value="volvo" selected>Gợi ý cho bạn</option>
        <i class="fas fa-angle-down"></i>
        <option value="saab">Saab</option>
        <option value="vw">VW</option>
        <option value="audi">Audi</option>
      </select>
    </div>
  </div>
  <div class="containers grid grid-cols-12 mt-3 gap-5">
    <div class="col-span-2">
      <ul class="border-b border-gray-300 pb-10">
        @foreach($cate as $item)
        <li class="hover:text-amber-600 mt-3 text-sm">
          <a href="{{route('category', ['id' => $item->id])}}">{{$item->name}}</a>
        </li>
        @endforeach
      </ul>
      <div class="border-b border-gray-300 pb-10">
        <h4 class="mt-8 font-bold">Lọc theo tính trạng</h4>
        <div class="mt-3">
          <form action="" method="POST">
            @csrf
            <div>
              <input type="radio" value="1" name="status" id="" />
              <label for="" class="text-sm ml-2">Hot</label>
            </div>
            <div>
              <input type="radio" value="0" name="status" id="" />
              <label for="" class="text-sm ml-2">Bình thường</label>
            </div>
        </div>
      </div>
      <div class="mt-5 text-center bg-amber-500 hover:bg-amber-700">
        <button type="submit" class="py-1 text-sm text-white">Lọc</button>
      </div>
      </form>
    </div>
    <div class="col-span-10 grid grid-cols-4 gap-5 mt-3">
      @foreach($products as $item3)
      <div class="text-center rounded-lg hover:shadow-2xl">
        <img src="{{asset('storage/'.$item3->image)}}" alt="" class="mx-auto py-5 h-44" />
        <div>
          <a href="{{route('detail', ['id' => $item3->id])}}" class="font-bold">{{$item3->name}}</a>
          <div class="flex px-5 mt-10 pb-2">
            <div>
              <h5 class="text-blue-400">3123 ¥</h5>
              <h5 class="mr-auto text-gray-400 text-sm">{{ number_format($item3->price, 0) }} VND</h5>
            </div>
            <h5 class="ml-auto text-sm mt-5 pt-1 opacity-70">
              Đã xem : <span>{{$item3->product_views}}</span>
            </h5>
          </div>
          <div class="py-3 ">
            <a href="#">
              <i class="fab fa-gratipay hover:text-white bg-gray-200 px-3 py-3 hover:bg-black rounded-full"></i>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-- end header -->
  <div class="bg-gray-100 mt-20">
    <div class="border-b border-t border-gray-300">
      <div class="grid grid-cols-5 mt-10 containers py-7 gap-5">
        <div class="">
          <h4 class="font-bold">Liên hệ</h4>
          <div class="flex mt-5">
            <i class="fas fa-map-marker-alt mt-1 mr-3"></i>
            <div>
              <h4 class="font-bold text-sm">Địa Chỉ:</h4>
              <h4 class="text-sm">
                〒136-0075 Tokyo, Koto City, Shinsuna, 3 Chome−10−8, 1F
                Warehouse 3
              </h4>
            </div>
          </div>
          <div class="flex mt-3">
            <i class="fas fa-envelope mt-1 mr-2"></i>
            <div>
              <h4 class="font-bold text-sm">Email</h4>
              <h5 class="text-sm hover:text-yellow-600">
                <a href="">duckhiem110@gmail.com</a>
              </h5>
            </div>
          </div>
        </div>
        <div class="">
          <h4 class="font-bold">Về chúng tôi</h4>
          <div class="mt-5">
            <h4 class="text-sm mt-2"><a href="">Về chúng tôi</a></h4>
            <h4 class="text-sm mt-2"><a href="">Blog</a></h4>
            <h4 class="text-sm mt-2">
              <a href="">Điều khoản & Chính sách</a>
            </h4>
          </div>
        </div>
        <div class="">
          <h4 class="font-bold">Dịch vụ khách hàng</h4>
          <div class="mt-5">
            <h4 class="text-sm hover:text-yellow-700">
              <a href="">Trung tâm hỗ trợ</a>
            </h4>
            <h4 class="mt-2 text-sm hover:text-yellow-700">
              <a href="">Chính sách bảo mật</a>
            </h4>
            <h4 class="mt-2 text-sm hover:text-yellow-700">
              <a href="">Hàng cấm nhập khẩu</a>
            </h4>
            <h4 class="mt-2 text-sm hover:tex-yellow-700">
              Câu hỏi thường gặp
            </h4>
            <h4 class="mt-2 text-sm hover:tex-yellow-700">Gửi câu hỏi</h4>
          </div>
        </div>
        <div class="">
          <h4 class="font-bold">Thanh Toán & Vận Chuyển</h4>
          <div class="mt-5">
            <h4 class="text-sm hover:text-yellow-700">
              <a href="">Biểu phí dịch vụ</a>
            </h4>
            <h4 class="mt-2 text-sm hover:text-yellow-700">
              <a href="">Phương thức thanh toán</a>
            </h4>
            <h4 class="mt-2 text-sm hover:text-yellow-700">
              <a href="">Phí gói</a>
            </h4>
            <h4 class="mt-2 text-sm hover:text-yellow-700">
              <a href="">Biểu phí lưu kho</a>
            </h4>
            <h4 class="mt-2 text-sm hover:text-yellow-700">
              <a href="">Phí vận chuyển quốc tế</a>
            </h4>
            <h4 class="mt-2 text-sm hover:text-yellow-700">
              <a href="">Thủ tục giao hàng</a>
            </h4>
          </div>
        </div>
        <div class="">
          <h4 class="font-bold">Hướng Dẫn Sử Dụng</h4>
          <div class="mt-5">
            <h4 class="text-sm hover:text-yellow-700">
              <a href="">Quy trình mua hàng</a>
            </h4>
            <h4 class="mt-2 text-sm hover:text-yellow-700">
              <a href="">Quy trình đấu giá</a>
            </h4>
            <h4 class="mt-2 text-sm hover:text-yellow-700">
              <a href="">Săn phút chót</a>
            </h4>
            <h4 class="mt-2 text-sm hover:text-yellow-700">
              <a href="">Hướng dẫn đặt hàng nhanh</a>
            </h4>
            <h4 class="mt-2 text-sm hover:text-yellow-700">
              <a href="">Về J-Point</a>
            </h4>
            <h4 class="mt-2 text-sm hover:text-yellow-700">
              <a href="">Tín dụng đấu giá</a>
            </h4>
          </div>
        </div>
      </div>
    </div>
    <div class="containers py-5">
      <div class="flex">
        <h4 class="font-bold mt-1">Kết nối với tôi</h4>
        <div class="flex gap-5 ml-10">
          <img class="w-8" src="{{asset('storage/anhweb/facebook.png')}}" alt="" />
          <img class="w-8" src="{{asset('storage/anhweb/ter.png')}}" alt="" />
          <img class="w-8" src="{{asset('storage/anhweb/intagam.png')}}" alt="" />
          <img class="w-8" src="{{asset('storage/anhweb/yout.png')}}" alt="" />
        </div>
      </div>
    </div>
    <div class="bg-amber-500">
      <div class="containers">
        <h5 class="text-center py-2 text-white">
          Copyright © 2022 - 2024 Chung Toi. All Rights Reserved
        </h5>
      </div>
    </div>
  </div>
</body>

</html>