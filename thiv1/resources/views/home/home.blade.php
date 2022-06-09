<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <script src="https://cdn.tailwindcss.com"></script>
<script
  src="https://kit.fontawesome.com/79e1832a3e.js"
  crossorigin="anonymous"
></script>
<link
  href="https://cdn.jsdelivr.net/npm/daisyui@2.15.0/dist/full.css"
  rel="stylesheet"
  type="text/css"
/>
<link
  rel="stylesheet"
  type="text/css"
  href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
/>
<script
  type="text/javascript"
  src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
></script>

<script
  defer
  src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"
></script>
<link rel="stylesheet" href="{{ asset('website') }}/index.css" />
  </head>
  <body>
  <!-- header -->
  <div class="bg-amber-600 sticky top-0 z-10">
    <div class="containers py-4">
      <div class="grid grid-cols-12 gap-10">
        <div class="col-span-2 mx-auto">
          <img class="h-10" src="{{asset('storage/anhweb/logo 2c.png')}}" alt="" />
        </div>
        <div class="col-span-7">
          <div class="relative">
            <input type="text" class="w-full p-1 mt-1 pr-20 rounded-md" />
            <i class="fas fa-search absolute top-3 right-6"></i>
          </div>
        </div>
        <div class="col-span-3 ml-auto flex gap-10 mt-1">
          <div
            class="text-2xl text-white relative"
            x-data="{ open: false }"
            @mouseleave="open = false"
          >
            <div @mouseover="open = true">
              <i class="fas fa-user"></i>
            </div>

            <div
              class="absolute bg-white w-52 right-0 mt-2 bg-white shadow-xl"
              x-show="open"
              x-transition.scale.origin.right
            >
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
          <div
            x-data="{ open: false }"
            @mouseleave="open = false"
            class="relative"
          >
            <div @mouseover="open = true">
              <i class="fab fa-opencart text-2xl text-white block"></i>
            </div>
            <div
              x-show="open"
              x-transition.scale.origin.right
              class="absolute bg-white w-72 right-0 py-24 mt-2 bg-white shadow-xl"
            >
              <img class="w-full px-20" src="{{asset('storage/anhweb/cart-empty.svg')}}" alt="" />
              <div class="text-center">
                <h4 class="font-bold mt-3">Giỏ hàng trống!</h4>
                <p class="text-xs mt-3">
                  không có sản phẩm trong giỏ hàng của bạn
                </p>
              </div>
            </div>
          </div>
          <div
            x-data="{ open: false }"
            @mouseleave="open = false"
            class="relative"
          >
            <div @mouseover="open = true">
              <i class="fas fa-bell text-2xl text-white"></i>
            </div>
            <div
              x-show="open"
              x-transition.scale.origin.right
              class="absolute bg-white w-72 pb-32 right-0 pt-5 pl-5 mt-2 bg-white shadow-xl"
            >
              <h4 class="font-bold">Thông báo</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="containers grid grid-cols-12 py-3">
    <div class="col-span-2 flex border-r pl-3 border-gray-400">
      <i class="fas fa-bars mt-1 mr-3"></i>
      <h4 class="">Tất cả danh mục</h4>
    </div>
    <div class="col-span-8 flex px-10 gap-10">
      <div>
        <a class="flex" href="#">
          <i class="fab fa-battle-net text-xl text-amber-600 mr-2"></i>
          <h4 class="font-bold">Market</h4></a
        >
      </div>
      <div>
        <a class="flex" href="#">
          <i class="fas fa-truck text-amber-600 text-xl mr-2"></i>
          <h4 class="font-bold">Express</h4></a
        >
      </div>
      <div>
        <a class="flex" href="#">
          <i class="fas fa-fire-alt text-amber-600 text-xl mr-2"></i>
          <h4 class="mt-1 font-bold">Ưu đãi</h4></a
        >
      </div>
    </div>
    <div class="col-span-2 flex">
      <i class="fas fa-home text-xl text-amber-600 mr-2"></i>
      <h4 class="font-bold mt-1">Bán ở nhật bản</h4>
    </div>
  </div>
  <!-- end header -->
  <!-- danh sach -->
  <div class="containers">
    <div class="grid grid-cols-12 border-t border-gray-300 border-b">
      <div class="col-span-2">
        <ul class="overflow-y-scroll h-full" id="style-1">
          <li class="py-2 px-3 hover:bg-gray-100">
            <a class="flex" href=""
              ><i class="mt-1 mr-3 fab fa-airbnb"></i>Amazon nhat</a
            >
          </li>
          <li class="py-2 px-3 hover:bg-gray-100">
            <a class="flex" href=""
              ><i class="mt-1 mr-3 fab fa-airbnb"></i>Amazon nhat</a
            >
          </li>
          <li class="py-2 px-3 hover:bg-gray-100">
            <a class="flex" href=""
              ><i class="mt-1 mr-3 fab fa-airbnb"></i>Amazon nhat</a
            >
          </li>
          <li class="py-2 px-3 hover:bg-gray-100">
            <a class="flex" href=""
              ><i class="mt-1 mr-3 fab fa-airbnb"></i>Amazon nhat</a
            >
          </li>
          <li class="py-2 px-3 hover:bg-gray-100">
            <a class="flex" href=""
              ><i class="mt-1 mr-3 fab fa-airbnb"></i>Amazon nhat</a
            >
          </li>
          <li class="py-2 px-3 hover:bg-gray-100">
            <a class="flex" href=""
              ><i class="mt-1 mr-3 fab fa-airbnb"></i>Amazon nhat</a
            >
          </li>
          <li class="py-2 px-3 hover:bg-gray-100">
            <a class="flex" href=""
              ><i class="mt-1 mr-3 fab fa-airbnb"></i>Amazon nhat</a
            >
          </li>
          <li class="py-2 px-3 hover:bg-gray-100">
            <a class="flex" href=""
              ><i class="mt-1 mr-3 fab fa-airbnb"></i>Amazon nhat</a
            >
          </li>
          <li class="py-2 px-3 hover:bg-gray-100">
            <a class="flex" href=""
              ><i class="mt-1 mr-3 fab fa-airbnb"></i>Amazon nhat</a
            >
          </li>
        </ul>
      </div>
      <div class="col-span-10">
        <img
          src="{{asset('storage/anhweb/banner4.png')}}"
          class="w-full"
          style="height: 400px"
          alt=""
        />
      </div>
    </div>
  </div>
  <!-- <div class="containers">
    <div class="mt-10">
      <h4 class="font-bold">Quy trình mua sắp đơn giản ?</h4>
      <div class="grid grid-cols-5 gap-5">
        <div class="bg-no-repeat service_flow__item text-center mt-10">
          <div class="bg-no-repeat service_flow__step">Bước 1:</div>
          <div class="w-full px-10">
            <img
              class="mx-auto w-full"
              style="max-width: 100%"
              src="{{asset('storage/anhweb/bg-sv1.png')}}"
              alt=""
            />
          </div>
          <p class="text-xs mt-3">
            Tìm kiếm sản phẩm mà bạn muốn mua hoặc đấu giá và check giá sản
            phẩm.
          </p>
        </div>
        <div class="bg-no-repeat service_flow__item text-center mt-10">
          <div class="bg-no-repeat service_flow__step">Bước 2:</div>
          <div class="w-full px-10">
            <img
              class="mx-auto w-full"
              style="max-width: 100%"
              src="{{asset('storage/anhweb/bg-sv1.png')}}"
              alt=""
            />
          </div>
          <p class="text-xs mt-3">
            Tìm kiếm sản phẩm mà bạn muốn mua hoặc đấu giá và check giá sản
            phẩm.
          </p>
        </div>
        <div class="bg-no-repeat service_flow__item text-center mt-10">
          <div class="w-full px-10">
            <img
              class="mx-auto w-full"
              style="max-width: 100%"
              src="{{asset('storage/anhweb/bg-sv1.png')}}"
              alt=""
            />
          </div>
          <p class="text-xs mt-3">
            Tìm kiếm sản phẩm mà bạn muốn mua hoặc đấu giá và check giá sản
            phẩm.
          </p>
        </div>
        <div class="bg-no-repeat service_flow__item text-center mt-10">
          <div class="bg-no-repeat service_flow__step">Bước 4:</div>
          <div class="w-full px-10">
            <img
              class="mx-auto w-full"
              style="max-width: 100%"
              src="{{asset('storage/anhweb/bg-sv1.png')}}"
              alt=""
            />
          </div>
          <p class="text-xs mt-3">
            Tìm kiếm sản phẩm mà bạn muốn mua hoặc đấu giá và check giá sản
            phẩm.
          </p>
        </div>
        <div class="bg-no-repeat service_flow__item text-center mt-10">
          <div class="bg-no-repeat service_flow__step">Bước 5:</div>
          <div class="w-full px-10">
            <img
              class="mx-auto w-full"
              style="max-width: 100%"
              src="{{asset('storage/anhweb/bg-sv1.png')}}"
              alt=""
            />
          </div>
          <p class="text-xs mt-3">
            Tìm kiếm sản phẩm mà bạn muốn mua hoặc đấu giá và check giá sản
            phẩm.
          </p>
        </div>
      </div>
    </div>
  </div> -->
  <div class="containers mt-10">
    <div class="flex">
      <h4 class="font-bold text-xl">Sản phẩm mới</h4>
      <span class="mt-1 ml-10 text-amber-600 hover:text-black"
        ><a href="#">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a
      ></span>
    </div>
    <div class="grid grid-cols-5 gap-5 mt-8">
        @foreach($products as $sp)
      <div class="text-center rounded-lg hover:shadow-2xl">
        <img src="{{asset('storage/'.$sp->image)}}" alt="" class="mx-auto py-5 h-44" />
        <div>
          <a href="{{route('detail', ['id' => $sp->id])}}" class="font-bold">{{$sp->name}}</a>
          <div class="flex px-5 mt-10 pb-2">
            <div>
              <h5 id="price"> {{$sp->price}} VNĐ</h5>
            </div>
          </div>
          <h5 class="ml-auto text-sm mt-5 pt-1 opacity-70">
              Đã xem : <span>34</span>
            </h5>
        </div>
      </div>
      @endforeach
    </div>
    <div class="mt-10">
      <img src="{{asset('storage/anhweb/banner1.png')}}" alt="" />
    </div>
  </div>
  <div class="containers mt-10">
    <div class="flex">
      <h4 class="font-bold text-xl">Sản phẩm nổi bật</h4>
      <span class="mt-1 ml-10 text-amber-600 hover:text-black"
        ><a href="#">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a
      ></span>
    </div>
    <div class="grid grid-cols-5 gap-5 mt-8">
      <div class="text-center rounded-lg hover:shadow-2xl">
        <img src="{{asset('storage/anhweb/10.png')}}" alt="" class="mx-auto py-5 h-44" />
        <div>
          <h4 class="font-bold">laptop đẹp</h4>
          <div class="flex px-5 mt-10 pb-2">
            <div>
              <h5 class="text-blue-400">3123 ¥</h5>
              <h5 class="mr-auto text-gray-400 text-sm">5000 VND</h5>
            </div>
            <h5 class="ml-auto text-sm mt-5 pt-1 opacity-70">
              Đã xem : <span>34</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="text-center rounded-lg hover:shadow-2xl">
        <img src="{{asset('storage/anhweb/12.png')}}" alt="" class="mx-auto py-5 h-44" />
        <div>
          <h4 class="font-bold">giay dep</h4>
          <div class="flex px-5 mt-10 pb-5">
            <div>
              <h5 class="text-blue-400">3123 ¥</h5>
              <h5 class="mr-auto text-gray-400 text-sm">5000 VND</h5>
            </div>
            <h5 class="ml-auto text-sm mt-5 pt-1 opacity-70">
              Đã xem : <span>34</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="text-center rounded-lg hover:shadow-2xl">
        <img src="{{asset('storage/anhweb/iph.jpg')}}" alt="" class="mx-auto py-5 h-44" />
        <div>
          <h4 class="font-bold">iphone</h4>
          <div class="flex px-5 mt-10 pb-5">
            <div>
              <h5 class="text-blue-400">3123 ¥</h5>
              <h5 class="mr-auto text-gray-400 text-sm">5000 VND</h5>
            </div>
            <h5 class="ml-auto text-sm mt-5 pt-1 opacity-70">
              Đã xem : <span>34</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="text-center rounded-lg hover:shadow-2xl">
        <img
          src="{{asset('storage/anhweb/Galaxy-A50-Mat-truoc-3.jpg')}}"
          alt=""
          class="mx-auto py-5 h-44"
        />
        <div>
          <h4 class="font-bold">sam sung</h4>
          <div class="flex px-5 mt-10 pb-5">
            <div>
              <h5 class="text-blue-400">3123 ¥</h5>
              <h5 class="mr-auto text-gray-400 text-sm">5000 VND</h5>
            </div>
            <h5 class="ml-auto text-sm mt-5 pt-1 opacity-70">
              Đã xem : <span>34</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="text-center rounded-lg hover:shadow-2xl">
        <img src="{{asset('storage/anhweb/13.png')}}" alt="" class="mx-auto py-5 h-44" />
        <div>
          <h4 class="font-bold">Quan ao</h4>
          <div class="flex px-5 mt-10 pb-5">
            <div>
              <h5 class="text-blue-400">3123 ¥</h5>
              <h5 class="mr-auto text-gray-400 text-sm">5000 VND</h5>
            </div>
            <h5 class="ml-auto text-sm mt-5 pt-1 opacity-70">
              Đã xem : <span>34</span>
            </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-5 gap-5 mt-8">
      <div class="text-center rounded-lg hover:shadow-2xl">
        <img src="{{asset('storage/anhweb/21.png')}}" alt="" class="mx-auto py-5 h-44" />
        <div>
          <h4 class="font-bold">Mỹ phẩm</h4>
          <div class="flex px-5 mt-10 pb-2">
            <div>
              <h5 class="text-blue-400">3123 ¥</h5>
              <h5 class="mr-auto text-gray-400 text-sm">5000 VND</h5>
            </div>
            <h5 class="ml-auto text-sm mt-5 pt-1 opacity-70">
              Đã xem : <span>34</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="text-center rounded-lg hover:shadow-2xl">
        <img src="{{asset('storage/anhweb/22.png')}}" alt="" class="mx-auto py-5 h-44" />
        <div>
          <h4 class="font-bold">Ôto, xe máy</h4>
          <div class="flex px-5 mt-10 pb-5">
            <div>
              <h5 class="text-blue-400">3123 ¥</h5>
              <h5 class="mr-auto text-gray-400 text-sm">5000 VND</h5>
            </div>
            <h5 class="ml-auto text-sm mt-5 pt-1 opacity-70">
              Đã xem : <span>34</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="text-center rounded-lg hover:shadow-2xl">
        <img src="{{asset('storage/anhweb/23.png')}}" alt="" class="mx-auto py-5 h-44" />
        <div>
          <h4 class="font-bold">Xưu tầm đồ cổ</h4>
          <div class="flex px-5 mt-10 pb-5">
            <div>
              <h5 class="text-blue-400">3123 ¥</h5>
              <h5 class="mr-auto text-gray-400 text-sm">5000 VND</h5>
            </div>
            <h5 class="ml-auto text-sm mt-5 pt-1 opacity-70">
              Đã xem : <span>34</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="text-center rounded-lg hover:shadow-2xl">
        <img src="{{asset('storage/anhweb/24.png')}}" alt="" class="mx-auto py-5 h-44" />
        <div>
          <h4 class="font-bold">Sách, tạp chí</h4>
          <div class="flex px-5 mt-10 pb-5">
            <div>
              <h5 class="text-blue-400">3123 ¥</h5>
              <h5 class="mr-auto text-gray-400 text-sm">5000 VND</h5>
            </div>
            <h5 class="ml-auto text-sm mt-5 pt-1 opacity-70">
              Đã xem : <span>34</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="text-center rounded-lg hover:shadow-2xl">
        <img src="{{asset('storage/anhweb/25.png')}}" alt="" class="mx-auto py-5 h-44" />
        <div>
          <h4 class="font-bold">Máy giặt</h4>
          <div class="flex px-5 mt-10 pb-5">
            <div>
              <h5 class="text-blue-400">3123 ¥</h5>
              <h5 class="mr-auto text-gray-400 text-sm">5000 VND</h5>
            </div>
            <h5 class="ml-auto text-sm mt-5 pt-1 opacity-70">
              Đã xem : <span>34</span>
            </h5>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-10">
      <img src="{{asset('storage/anhweb/banner2.png')}}" alt="" />
    </div>
  </div>
  <!-- danh mục -->
  <div class="containers mt-20">
    <div class="">
      <div class="flex">
        <h4 class="mt-2 font-bold text-xl">Danh mục sản phẩm</h4>
        <h5 class="mt-3 ml-5 text-yellow-500 hover:text-black">
          <a href=""
            >Xem tất cả <i class="fas fa-long-arrow-alt-right"></i
          ></a>
        </h5>
      </div>
    </div>

    <div class="grid grid-cols-6 mt-10 text-center gap-5">
      <div>
        <a href="">
          <img class="mx-auto" src="{{asset('storage/anhweb/20211009091530.png')}}" alt="" />
          <div>
            <h4>Đồ chơi & trò chơi</h4>
          </div>
        </a>
      </div>
      <div>
        <a href="">
          <img class="mx-auto" src="{{asset('storage/anhweb/20211009092309.png')}}" alt="" />
          <div>
            <h4>Đồng hồ & phụ kiện</h4>
          </div>
        </a>
      </div>
      <div>
        <a href="">
          <img class="mx-auto" src="{{asset('storage/anhweb/10.png')}}" alt="" />
          <div>
            <h4>Điện tử văn phòng</h4>
          </div>
        </a>
      </div>
      <div>
        <a href="">
          <img class="mx-auto" src="{{asset('storage/anhweb/11.png')}}" alt="" />
          <div>
            <h4>Đồ điện . AV & Máy ảnh</h4>
          </div>
        </a>
      </div>
      <div>
        <a href="">
          <img class="mx-auto" src="{{asset('storage/anhweb/12.png')}}" alt="" />
          <div>
            <h4>Thể thao & Giải trí</h4>
          </div>
        </a>
      </div>
      <div>
        <a href="">
          <img class="mx-auto" src="{{asset('storage/anhweb/13.png')}}" alt="" />
          <div>
            <h4>Thời trang & Phụ kiện</h4>
          </div></a
        >
      </div>
    </div>
    <div class="grid grid-cols-6 mt-5 text-center gap-5">
      <a href=""
        ><div>
          <img class="mx-auto" src="{{asset('storage/anhweb/14.png')}}" alt="" />
          <div>
            <h4>Ôto xe, Xe máy, Xe đap</h4>
          </div>
        </div></a
      >
      <div>
        <a href=""
          ><img class="mx-auto" src="{{asset('storage/anhweb/20211009092309.png')}}" alt="" />
          <div>
            <h4>Đồng hồ & phụ kiện</h4>
          </div></a
        >
      </div>
      <div>
        <a href="">
          <img class="mx-auto" src="{{asset('storage/anhweb/20211009092309.png')}}" alt="" />
          <div>
            <h4>Đồng hồ & phụ kiện</h4>
          </div></a
        >
      </div>
      <div>
        <a href="">
          <img class="mx-auto" src="{{asset('storage/anhweb/20211009092309.png')}}" alt="" />
          <div>
            <h4>Đồng hồ & phụ kiện</h4>
          </div>
        </a>
      </div>
      <div>
        <a href="">
          <img class="mx-auto" src="{{asset('storage/anhweb/20211009092309.png')}}" alt="" />
          <div>
            <h4>Đồng hồ & phụ kiện</h4>
          </div>
        </a>
      </div>
      <div>
        <a href="">
          <img class="mx-auto" src="{{asset('storage/anhweb/20211009092309.png')}}" alt="" />
          <div>
            <h4>Đồng hồ & phụ kiện</h4>
          </div>
        </a>
      </div>
    </div>
    <div class="mt-10">
      <img src="{{asset('storage/anhweb/banner3.png')}}" alt="" />
    </div>
  </div>
  <!-- end danh mục -->
  <!-- list website -->
  <div class="containers mt-10">
    <div class="flex">
      <h4 class="font-bold text-xl">Danh sách website mua sắm</h4>
      <span class="mt-1 ml-10 text-amber-600 hover:text-black"
        ><a href="#">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a
      ></span>
    </div>
    <p class="text-sm mt-2">
      Hơn 100 trang web mua sắm uy tín tại Nhật cho phép bạn thỏa sức chọn
      lựa.
    </p>

    <div class="grid grid-cols-5 gap-5 mt-8">
      <div
        class="px-3 py-3 rounded-xl hover:shadow-xl border border-gray-300"
      >
        <a href="">
          <img src="{{asset('storage/anhweb/amazon.png')}}" alt="" class="mx-auto"
        /></a>
        <div>
          <h4 class="font-bold">Amazon</h4>
          <p class="text-sm text-gray-400 mt-3 pb-5">
            Sàn thương mại điện tử Amazon Nhật Bản
          </p>
        </div>
      </div>
    </div>
  </div>
<!-- footer -->
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
 
    
