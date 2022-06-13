<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
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
  <div class="bg-amber-600 sticky top-0 z-10 lg:block hidden">
    <div class="containers py-4">
      <div class="grid grid-cols-12 gap-10">
        <div class="col-span-3 lg:col-span-2 mx-auto">
          <a href="{{route('home')}}">
            <img class="h-10" src="{{asset('storage/anhweb/logo 2c.png')}}" alt="" />
          </a>
        </div>
        <div class="col-span-6 lg:col-span-7">
          <div class="relative">
            <form action="{{route('search')}}" method="POST">
              @csrf
              <input type="text" name="search" class="w-full p-1 mt-1 pr-20 rounded-md" />
              <button type="submit"><i class="fas fa-search absolute top-3 right-6"></i></button>
            </form>
          </div>
        </div>
        <div class="col-span-3 lg:ml-auto flex gap-10 mt-1">
          <!-- user -->
          <div class="text-2xl text-white relative hidden sm:block" x-data="{ open: false }" @mouseleave="open = false">
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
          <!-- đấu giá -->
          <div class="hidden md:block">
            <i class="fas fa-gavel text-2xl text-white"></i>
          </div>
          <!-- giỏ hàng -->
          <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
            <div @mouseover="open = true">
              <i class="fab fa-opencart text-2xl text-white block"></i>
            </div>
            <div x-show="open" x-transition.scale.origin.right class="absolute bg-whitew-72 w-64 right-0 px-3 py-5  mt-2 bg-white shadow-xl">
              <div>
                <h5 class="font-bold">cart</h5>
              </div>
              @foreach ($cart as $item12)
              <div class="flex gap-3 mt-3">
                <a href=""><img class="w-20" src="{{asset('storage/'.$item12['image'])}}" alt=""></a>
                <div>
                  <a href="">
                    <h5 class="font-bold text-sm hover:text-yellow-500">{{$item12['name']}}</h5>
                  </a>
                  <div class="grid grid-cols-2  mt-2">
                    <div class="text-xs">
                      <h5 class="font-bold">{{$item12['price']}} ¥</h5>
                    </div>
                    <div class="text-xs">
                      <p class="text-gray-400">Số lượng : <span>{{$item12['quantity']}}</span></p>
                      <a href="{{route('deletecart',['id'=>$item12['id']])}}"><button class="ml-12"> <i class="fas fa-trash-alt text-red-500 "></i></button></a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              <div class="mt-3 border-t-2 border-gray-300 ">
                 <a href="#"><button class="border-2 border-yellow-500 mt-3 hover:bg-yellow-500 hover:text-white text-center w-full text-yellow-500">view cart</button></a>
              </div>
            </div>
          </div>
          <!-- end giỏ hàng -->
          <!-- thong báo -->
          <div x-data="{ open: false }" @mouseleave="open = false" class="relative hidden lg:block">
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
  <div class="hidden lg:block">
    <div class="containers grid grid-cols-12 py-3">
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
  </div>
  <div class="bg-gray-200 py-3 lg:block hidden">
    <div class="containers">
      <a href="">
        <div class="text-sm flex hover:text-amber-600">
          <i class="fas fa-home text-sm mr-3"></i>
          <h5 class="">Trang chủ</h5>
        </div>
      </a>
    </div>
  </div>
  <!-- content -->
  <div class="containers">
    <div class="grid grid-cols-1 lg:grid-cols-12 lg:mt-10 lg:gap-10">
      <div class="hidden md:block lg:hidden sticky top-0">
        <div class="flex  bg-gray-200  ">
          <div class="px-6 py-3 ">
            <a href="">
              <i class="fas bg-gray-700 text-white px-4 py-2 text-sm rounded-full fa-angle-left"></i>
            </a>
          </div>
          <div class="px-6 py-3 ml-auto">
            <i class="fas bg-gray-700 text-white px-3 text-sm py-2 rounded-full fa-share-alt"></i>
            <i class="fas bg-gray-700 text-white px-4 text-sm py-2 rounded-full fa-ellipsis-v"></i>
          </div>
        </div>
      </div>
      <div class="md:px-16 py-5  md:bg-gray-200 lg:bg-white lg:px-0 lg:col-span-4">
        <img class=" w-full" src="{{asset('storage/'.$product->image)}}" alt="" />
      </div>
      <div class="lg:col-span-8 mt-2 md:mt-3 px-3 md:px-16 lg:px-0">
        <h1 class="font-bold text-xl">
          {{$product->name}}
        </h1>
        <div class="mt-3">
          <span class="text-sm text-gray-600">
            <i class="fas fa-star text-amber-600"></i>
            <i class="fas fa-star text-amber-600"></i>
            <i class="fas fa-star text-amber-600"></i>
            <i class="fas fa-star text-amber-600"></i>
            <i class="fas fa-star text-gray-600"></i>
          </span>
          <p class="text-sm">Đánh giá</p>
        </div>
        <div class="grid grid-cols-2 text-sm mt-5">
          <div>
            <h5>Gía hiện tại:</h5>
            <div class="mt-3">
              <h5 class="text-2xl font-bold">5,478 ¥</h5>
              <span class="font-bold mt-1 text-gray-400">{{ number_format($product->price, 0) }} VND</span>
            </div>
          </div>
          <div>
            <h5>Thuế: <span class="font-bold">0 %</span></h5>
            <p class="mt-1">Phí vận chuyển nội địa: Miễn phí vận chuyển</p>
          </div>
        </div>
        <div class=" gap-3 md:gap-5 lg:gap-5  flex mt-14">
          <div>
            <button class="px-8 border-blue-500 border text-sm">S</button>
          </div>
          <div>
            <button class="px-8 border-blue-500 border text-sm">M</button>
          </div>
          <div>
            <button class="px-8 border-blue-500 border text-sm">L</button>
          </div>
          <div>
            <button class="px-8 border-blue-500 border text-sm">XL</button>
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 mt-10">
          <div>
            <h4 class="text-sm font-bold">Số lượng:</h4>
            <div class="flex mt-3">
              <button class="px-2 py-1 bg-gray-400 text-sm">-</button>
              <input type="text" class="w-14 py-1 text-center border border-gray-300 text-sm" value="1" />
              <button class="px-2 py-1 bg-gray-400 text-sm">+</button>
            </div>
            <div>
              <h4 class="text-sm mt-3">Ghi chú:</h4>
              <textarea class="w-full py-1 border border-gray-300 text-sm mt-2" rows="3"></textarea>
            </div>
          </div>
          <div class="flex flex-col md:mx-auto mt-5">
            <button class="bg-blue-500 md:w-44 font-bold text-sm py-2 text-white">
              MUA NGAY
            </button>
            <button class="text-blue-500 md:w-44 font-bold text-sm py-2 hover:bg-blue-500 border border-blue-500 mt-3 hover:text-white">
              <a href="{{route('addcart',['id' => $product->id])}}"><i class="fab fa-opencart"></i> THÊM VÀO GIỎ</a>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="border-t-4  mt-5 border-gray-300 ">

    </div>
    <div class="mt-10 md:mt-3 lg:mt-10 px-3 md:px-16 lg:px-3 ">
      <h3 class="font-bold text-lg">Sản phẩm tương tự</h3>
      <div class=" grid grid-cols-4 gap-5 mt-10  w-full">
        @foreach ($sptt as $item)
        <div class="text-center rounded-lg hover:shadow-2xl">
          <img src="{{asset('storage/'.$item->image)}}" alt="" class="mx-auto py-5 h-44" />
          <div>
            <a href="{{route('detail', ['id' => $item->id])}}" class="font-bold">{{$item->name}}</a>
            <div class="flex px-5 mt-10 pb-2">
              <div>
                <h5 class="text-blue-400">3123 ¥</h5>
                <h5 class="mr-auto text-gray-400 text-sm">{{ number_format($item->price, 0) }} VND</h5>
              </div>
              <h5 class="ml-auto text-sm mt-5 pt-1 opacity-70">
                Đã xem : <span>{{$item->product_views}}</span>
              </h5>
            </div>
            <div class="py-3">
              <a href="#">
                <i class="fab fa-gratipay hover:text-white bg-gray-200 px-3 py-3 hover:bg-black rounded-full"></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="grid grid-cols-3  lg:hidden block border-t border-gray-400 py-2 sticky bottom-0 bg-white">
      <div class="mx-auto text-center text-gray-500">
        <a href="">
          <i class="fas fa-home text-sm"></i>
          <h4 class="text-sm">Trang chủ</h4>
        </a>
      </div>
      <div class="mx-auto text-center text-gray-500">
        <i class="fas fa-heart"></i>
        <h4 class="text-sm">Ưa thích</h4>
        </a>
      </div>
      <div class="mx-auto text-center text-gray-500">
        <a href="">
          <i class="fas fa-user"></i>
          <h4 class="text-sm">Cá nhân</h4>
        </a>
      </div>
    </div>
  </div>
  <!--footer-->
  <div class="bg-gray-100 mt-20 lg:block hidden">
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