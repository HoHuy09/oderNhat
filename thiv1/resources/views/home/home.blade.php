<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://kit.fontawesome.com/79e1832a3e.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.15.0/dist/full.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="{{ asset('website') }}/index.css" />
</head>

<body>
  <!-- loading -->
  <div class="loader h-screen z-20 w-full bg-white  fixed justify-center items-center  left-0 top-0" style="width: 100%;
height: 100vh; position: fixed;
top: 0;
left: 0;
display: flex;
align-items: center;
justify-content: center;">
    <img style="width:200px;" src="{{asset('storage/anhweb/loader.gif')}}" alt="">
  </div>
  <div class="content " style="display: none;">
    <!-- header -->
    <div class="bg-amber-600 hidden lg:block sticky top-0 z-10">
      <div class="containers pt-4 ">
        <div class="grid grid-cols-12 gap-10">
          <div class="col-span-2 mx-auto">
            <a href="{{route('home')}}">
              <img class="h-10" src="{{asset('storage/anhweb/logo.png')}}" alt="" />
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
          <div class="col-span-3 lg:ml-auto flex gap-10 mt-1">
            <div class="text-2xl text-white relative hidden lg:block" x-data="{ open: false }" @mouseleave="open = false">
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

            <div class="hidden lg:block">
              <i class="fas fa-gavel text-2xl text-white"></i>
            </div>
            <!-- icon cart -->
            <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
              <div @mouseover="open = true">
                <i class="fab fa-opencart text-2xl text-white"></i>
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
                  <a href="{{route('cart')}}"><button class="border-2 border-yellow-500 mt-3 hover:bg-yellow-500 hover:text-white text-center w-full text-yellow-500">view cart</button></a>
                </div>
              </div>
            </div>
            <div x-data="{ open: false }" @mouseleave="open = false" class="relative hidden lg:block">
              <div @mouseover="open = true">
                <i class="fas fa-bell text-2xl text-white"></i>
              </div>
              <div x-show="open" x-transition.scale.origin.right class="absolute bg-white w-72 pb-32 right-0 pt-5 pl-5 mt-2 bg-white shadow-xl">
                <h4 class="font-bold">Thông báo </h4>
                <div>@if(session()->has('success'))
                  <div class="alert alert-success">
                    {{ session()->get('success') }}
                  </div>
                  @endif
                </div>
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
          <div>
            <a class="flex" href="#">
              <i class="fas fa-leaf  text-amber-600 text-xl mr-2"></i>

              <h4 class="mt-1 font-bold">Giới thiệu</h4>
            </a>
          </div>
        </div>
        <div class="col-span-2 flex">
          <i class="fas fa-home text-xl text-amber-600 mr-2"></i>
          <h4 class="font-bold mt-1">Bán ở nhật bản</h4>
        </div>
      </div>
    </div>
    <!-- end header -->
    <!-- danh sach -->
    <div class="containers">
      <div class="grid grid-cols-1 lg:grid-cols-12 border-t border-gray-300 border-b">
        <div class="lg:col-span-2 hidden lg:block">
          <ul class="h-full" id="style-1">
            @foreach($category as $cate)
            <li class="py-2 px-3 hover:bg-gray-100">
              <a class="flex" href="{{route('cate', ['id' => $cate->id])}}"><i class="mt-1 mr-3 fab fa-airbnb"></i>{{$cate->name}}</a>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="lg:col-span-10 hidden lg:block">
          <div class="your-class">
            <div> <img src="{{asset('storage/anhweb/banner7.png')}}" class="w-full bg-cover bg-left" style="height: 400px" alt="" /></div>
            <div><img src="{{asset('storage/anhweb/banner4.png')}}" class="w-full bg-cover" style="height: 400px" alt="" /></div>
            <div><img src="{{asset('storage/anhweb/banner5.png')}}" class="w-full bg-cover" style="height: 400px" alt="" /></div>
            <div><img src="{{asset('storage/anhweb/banner6.png')}}" class="w-full bg-cover" style="height: 400px" alt="" /></div>
          </div>
        </div>
        <!-- banner mobile -->
        <div class="relative block lg:hidden">
          <div class="absolute flex w-full mt-5 px-5 md:px-16">
            <div class="flex">
              <i class="fas fa-bars text-white text-2xl"></i>
              <img class="h-10 ml-5" src="{{asset('storage/anhweb/logo 2c.png')}}" alt="" />
            </div>
            <div class="ml-auto">
              <i class="fab fa-opencart text-2xl text-white"></i>
            </div>
          </div>
          <div class="absolute w-full mt-16 px-5 md:px-16">
            <div class="relative">
              <input type="text" class="w-full p-1 mt-1 pr-20 py-2 px-2 rounded-md" placeholder="Nhập tên sản phẩm ..." />
              <i class="fas fa-search absolute top-4 right-4"></i>
            </div>
          </div>
          <img width="100%" src="{{asset('storage/anhweb/bannermobile.png')}}" alt="" />
        </div>
      </div>
    </div>
    <!-- end danh sach -->
    <!-- list app mobile -->
    <div class="containers border-t-4 border-gray-300 block lg:hidden px-5 md:px-16">
      <div>
        <h4 class="font-bold text-gray-500 pt-10">Từ Việt Nam:</h4>
        <div class="grid grid-cols-4 md:grid-cols-8 mt-5 gap-5">
          <div class="text-center">
            <a href="">
              <img class="mx-auto w-6/12 md:w-10/12" src="{{asset('storage/anhweb/amazon2.png')}}" alt="" />
              <span class="text-sm">Amazon</span>
            </a>
          </div>
          <div class="text-center">
            <a href="">
              <img class="mx-auto w-6/12 md:w-10/12" src="{{asset('storage/anhweb/shop.png')}}" alt="" />
              <span class="text-sm">Shoppe</span>
            </a>
          </div>
        </div>
      </div>
      <div>
        <h4 class="font-bold text-gray-500 pt-5">Từ japan:</h4>
        <div class="grid grid-cols-4 md:grid-cols-8 mt-5 gap-5">
          <div class="text-center">
            <a href="">
              <img class="mx-auto w-6/12 md:w-10/12" src="{{asset('storage/anhweb/amazon2.png')}}" alt="" />
              <span class="text-sm">Amazon</span>
            </a>
          </div>
          <div class="text-center">
            <a href="">
              <img class="mx-auto w-6/12 md:w-10/12" src="{{asset('storage/anhweb/shop.png')}}" alt="" />
              <span class="text-sm">Shoppe</span>
            </a>
          </div>
          <div class="text-center">
            <a href="">
              <img class="mx-auto w-6/12 md:w-10/12" src="{{asset('storage/anhweb/amazon2.png')}}" alt="" />
              <span class="text-sm">Amazon</span>
            </a>
          </div>
          <div class="text-center">
            <a href="">
              <img class="mx-auto w-6/12 md:w-10/12" src="{{asset('storage/anhweb/amazon2.png')}}" alt="" />
              <span class="text-sm">Amazon</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="containers px-5 md:px-0  lg:px-0 mt-10">
      <div class="flex md:px-14 lg:px-0">
        <h4 class="font-bold text-xl">Sản phẩm mới</h4>
        <span class="mt-1 ml-10 text-amber-600 hover:text-black"><a href="#">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a></span>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-5 mt-8  md:px-16 lg:px-10">
        @foreach($products as $sp)
        <div class="text-center px-5 rounded-lg hover:shadow-2xl">
          <img src="{{asset('storage/'.$sp->image)}}" alt="" class="mx-auto py-5 h-44" />
          <div>
            <a href="{{route('detail', ['id' => $sp->id])}}" class="font-bold">{{$sp->name}}</a>
            <div class="flex mt-10 pb-2">
              <div>
                <h5 class="text-blue-400">3123 ¥</h5>
                <h5 class="mr-auto text-gray-400 text-sm">{{$sp->price}} VND</h5>
              </div>
              <h5 class="ml-auto text-sm mt-5 pt-1 opacity-70">
                Đã xem <span>{{$sp->product_views}}</span>
              </h5>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="mt-10">
        <img src="{{asset('storage/anhweb/banner1.png')}}" alt="" />
      </div>
    </div>
    <div class="containers px-5 md:px-0 lg:px-0 mt-10">
      <div class="flex md:px-14 lg:px-0">
        <h4 class="font-bold text-xl">Sản phẩm nổi bật</h4>
        <span class="mt-1 ml-10 text-amber-600 hover:text-black"><a href="#">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a></span>
      </div>
      <div class="grid grid-cols-2  md:px-16 lg:px-10 md:grid-cols-4 lg:grid-cols-5 gap-5 mt-8">
        @foreach($productnb as $spnb)
        <div class=" px-5 rounded-lg hover:shadow-2xl">
          <img src="{{asset('storage/'.$spnb->image)}}" alt="" class="mx-auto py-5 h-44" />
          <div>
            <a href="{{route('detail', ['id' => $spnb->id])}}" class="font-bold text-md">{{$spnb->name}}</a>
            <div class="flex mt-10 pb-2">
              <div>
                <h5 class="text-blue-400">3123 ¥</h5>
                <h5 class="mr-auto text-gray-400 text-sm">{{$spnb->price}}</h5>
              </div>
              <h5 class="ml-auto text-sm mt-5 pt-1 opacity-70">
                Đã xem <span>{{$spnb->product_views}}</span>
              </h5>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="mt-10">
        <img src="{{asset('storage/anhweb/banner2.png')}}" alt="" />
      </div>
    </div>
    <!-- danh mục -->
    <div class="containers px-5  lg:px-0 mt-20">
      <div class=" md:px-14 lg:px-0">
        <div class="flex">
          <h4 class="mt-2 font-bold text-xl">Danh mục sản phẩm</h4>
          <h5 class="mt-3 ml-5 text-yellow-500 hover:text-black">
            <a href="">Xem tất cả <i class="fas fa-long-arrow-alt-right"></i></a>
          </h5>
        </div>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 md:px-16 lg:px-10 mt-10 text-center gap-5">
        <!-- @foreach($category as $cate)
      <div>
        <a href="#">
          <img class="mx-auto" src="{{asset('storage/'.$cate->image)}}" alt="" />
          <div>
            <h4>{{$cate->name}}</h4>
          </div>
        </a>
      </div>
      @endforeach -->
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
            </div>
          </a>
        </div>
        <a href="">
          <div>
            <img class="mx-auto" src="{{asset('storage/anhweb/14.png')}}" alt="" />
            <div>
              <h4>Ôto xe, Xe máy, Xe đap</h4>
            </div>
          </div>
        </a>
        <div>
          <a href=""><img class="mx-auto" src="{{asset('storage/anhweb/20211009092309.png')}}" alt="" />
            <div>
              <h4>Đồng hồ & phụ kiện</h4>
            </div>
          </a>
        </div>
      </div>
      <div class="mt-10 ">
        <img src="{{asset('storage/anhweb/banner3.png')}}" alt="" />
      </div>
    </div>
    <!-- end danh mục -->
    <!-- list website -->
    <div class="containers hidden lg:block mt-10">
      <div class="flex">
        <h4 class="font-bold text-xl">Danh sách website mua sắm</h4>
        <span class="mt-1 ml-10 text-amber-600 hover:text-black"><a href="#">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a></span>
      </div>
      <p class="text-sm mt-2">
        Hơn 100 trang web mua sắm uy tín tại Nhật cho phép bạn thỏa sức chọn
        lựa.
      </p>

      <div class="grid grid-cols-5 gap-5 mt-8">
        <div class="px-3 py-3 rounded-xl hover:shadow-xl border border-gray-300">
          <a href="">
            <img src="{{asset('storage/anhweb/amazon.png')}}" alt="" class="mx-auto" /></a>
          <div>
            <h4 class="font-bold">Amazon</h4>
            <p class="text-sm text-gray-400 mt-3 pb-5">
              Sàn thương mại điện tử Amazon Nhật Bản
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- menu mobile -->
    <div class="grid grid-cols-3 containers  lg:hidden  border-t border-gray-400 py-2 sticky bottom-0 bg-white">
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
    <!-- footer -->
    <div class="bg-gray-100 mt-20 hidden lg:block">
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
  </div>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript">
    var loader = document.querySelector('.loader')
    var content = document.querySelector('.content')
    window.addEventListener('load', function() {
      loader.style.display = "none"
      content.style.display = "block"
    })

    //loading
    $(document).ready(function() {
      $('.your-class').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false
      });
    });
  </script>
</body>
<div class="grid grid-cols-5 gap-5 mt-8">
  <div class="px-3 py-3 rounded-xl hover:shadow-xl border border-gray-300">
    <a href="">
      <img src="{{asset('storage/anhweb/amazon.png')}}" alt="" class="mx-auto" /></a>
    <div>
      <h4 class="font-bold">Amazon</h4>
      <p class="text-sm text-gray-400 mt-3 pb-5">
        Sàn thương mại điện tử Amazon Nhật Bản
      </p>
    </div>
  </div>
</div>
</div>
<!-- menu mobile -->
<div class="grid grid-cols-3 containers  lg:hidden  border-t border-gray-400 py-2 sticky bottom-0 bg-white">
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
<!-- footer -->
