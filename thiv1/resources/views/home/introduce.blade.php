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
  <div class="loader h-screen z-20 w-full bg-white  fixed justify-center items-center  left-0 top-0" style="width: 100%;
  height: 100vh; position: fixed;
  top: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: center;">
      <img style="width:200px;" src="{{asset('storage/anhweb/loader.gif')}}" alt="">
    </div>
    <div class="content" style="display: none">
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
              <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                <div @mouseover="open = true">
                  <i class="fas fa-bell text-2xl text-white"></i>
                </div>
                <div x-show="open" x-transition.scale.origin.right class="absolute bg-white w-72 pb-32 right-0 pt-5 pl-5 mt-2 bg-white shadow-xl">
                  <h4 class="font-bold">Thông báo</h4>
                  <div>@if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif</div>
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
                      <a href="{{route('home')}}"><h5 class="">Trang chủ</h5></a>
                  </div>
              </a>
          </div>
      </div>
  
      <!-- content -->
      <div class="containers mt-10 relative pb-40">
          <h2 class="font-bold bg-gray-100 rounded-md pb-20 px-10 pt-5">
              Mua hàng NHẬT BẢN tại VIỆT NAM chưa bao giờ dễ dàng đến thế
          </h2>
          <div class="absolute top-20 left-10 grid grid-cols-4 gap-5" style="max-width: calc(100% - 355px)">
              <div class="gap-1 border border-gray-300 bg-white px-3 py-5 rounded-lg h-44">
                  <div class="flex">
                      <h4 class="font-bold text-sm">Hỗ trợ khách hàng 24/7</h4>
                      <img class="w-8 h-8" src="{{asset('storage/anhweb/icon1.png')}}" alt="" />
                  </div>
                  <p class="text-xs mt-3 text-gray-500">
                      Dịch vụ khách hàng tư vấn nhiệt tình, hỗ trợ Quý khách hàng 24/24h mọi lúc mọi nơi.
                  </p>
              </div>
              <div class="gap-1 border border-gray-300 bg-white px-3 py-5 rounded-lg h-44">
                  <div class="flex">
                      <h4 class="font-bold text-sm">Vận chuyển nhanh chóng</h4>
                      <img class="w-8 h-8" src="{{asset('storage/anhweb/icon2.png')}}" alt="" />
                  </div>
                  <p class="text-xs mt-3 text-gray-500">
                      Thời gian vận chuyển hàng hóa nhanh chóng, an toàn chỉ từ 3-5 ngày
                  </p>
              </div>
              <div class="gap-1 border border-gray-300 bg-white px-3 py-5 rounded-lg h-44">
                  <div class="flex">
                      <h4 class="font-bold text-sm">Bảo hiểm 100% hàng hóa</h4>
                      <img class="w-8 h-8" src="{{asset('storage/anhweb/icon3.png')}}" alt="" />
                  </div>
                  <p class="text-xs mt-3 text-gray-500">
                      Chính sách bảo hiểm hàng hóa tới 100%, nói KHÔNG với các trường hợp hàng hóa thất lạc, rơi vỡ, móp méo, tráo hàng, ..
                  </p>
              </div>
              <div class="gap-1 border border-gray-300 bg-white px-3 py-5 rounded-lg h-44">
                  <div class="flex">
                      <h4 class="font-bold text-sm">Săn SALE khủng dễ dàng</h4>
                      <img class="w-8 h-8" src="{{asset('storage/anhweb/icon4.png')}}" alt="" />
                  </div>
                  <p class="text-xs mt-3 text-gray-500">
                      Mua sắm hàng Nhật với quy trình trọn gói, thủ tục đơn giản, thanh toán dễ dàng!
                  </p>
              </div>
          </div>
          <div class="absolute top-16 right-0 w-96">
              <img src="{{asset('storage/anhweb/may bay (1) (1).png')}}" alt="" />
          </div>
      </div>
      <!-- introduce -->
      <div class="containers mt-5 border border-gray-300 px-5 pt-5 pb-20">
          <h3 class="font-bold text-xl border-b pb-5 border-gray-300">Tại sao nên chọn Ordernhat247?</h3>
          <div class="mt-10 ">
              <ul class="text-sm  px-10">
                  <li class="flex">
                      <i class="fas fa-circle text-xs mt-1 mr-3"></i>
                      <span class="text-gray-500">Hầu hết các trang web của Nhật, Mỹ không giao hàng ra nước ngoài và chỉ chấp nhận thẻ thanh toán nội địa. Vì vậy, bạn sẽ rất khó để có thể mua trực tiếp từ những trang web này.</span>
                  </li>
                  <li class="flex mt-1">
                      <i class="fas fa-circle text-xs mt-1 mr-3"></i>
                      <span class="text-gray-500">  Và vấn đề quan trọng nhất, chúng tôi sẽ giúp bạn tối ưu chi phí vận chuyển từ khâu đóng gói đơn hàng. Hàng khi được gửi về đến kho của Janbox sẽ được miễn phí kiểm kê và đóng gói lại để giảm trọng lượng của gói hàng, từ đó khách hàng có thể tiết kiệm được chi phí vận chuyển. Đây là một trong những điểm vượt trội mà Ordernhat247 mang lại cho khách hàng của mình.</span>
                  </li>
                  <li class="flex mt-1">
                      <i class="fas fa-circle text-xs mt-1 mr-3"></i>
                      <span class="text-gray-500">  Chúng tôi sẽ giúp bạn giải quyết tất cả những khó khăn trên với dịch vụ mua hàng thông minh của Ordernhat247. Chỉ cần vài thao tác đơn giản là có thể mua được hàng chất lượng nội địa Nhật và Mỹ và đảm bảo vận chuyển nhanh chóng và an toàn về Việt Nam với giá rẻ nhất!</span>
                  </li>
              </ul>
              <h5 class="font-bold mt-5 bg-gray-100 py-3 px-10"><i class="fas fa-star text-white bg-orange-400 py-1 px-2 text-xs rounded-full mr-5"></i>Bạn có thể mua bất cứ sản phẩm gì từ hàng trăm website từ Nhật, Mỹ!</h5>
              <h5 class="font-bold mt-5 bg-gray-100 py-3 px-10"><i class="fas fa-star text-white bg-orange-400 py-1 px-2 text-xs rounded-full mr-5"></i>Bạn có thể mua được những sản phẩm hiếm, giới hạn với giá phải chăng!</h5>
              <h5 class="font-bold mt-5 bg-gray-100 py-3 px-10"><i class="fas fa-star text-white bg-orange-400 py-1 px-2 text-xs rounded-full mr-5"></i>Bạn có thể có thể thỏa sức mua sắp tại website!</h5>
          </div>
      </div>
      <div class="grid grid-cols-3 containers mt-10 gap-5">
          <div class="flex bg-blue-600 pl-3 py-5 rounded-lg">
              <div class="w-full bg-no-repeat" style="
              background-position: center right;
              background-image: url('{{asset('storage/anhweb/service-1.png')}}');
              background-position: center right -22px;
            ">
                  <h4 class="border-b border-white text-sm w-16 text-white">Dịch vụ</h4>
                  <h3 class="mt-3 font-bold text-md text-white">MUA HÀNG</h3>
                  <a href="">
                      <button class="bg-yellow-400 py-2 px-7 rounded-md mt-3 text-sm hover:text-white duration-1000">
                Chi tiết
              </button></a>
              </div>
          </div>
          <div class="flex bg-red-600 pl-3 py-5 rounded-lg">
              <div class="w-full bg-no-repeat pb-16" style="
              background-position: center right;
              background-image: url('{{asset('storage/anhweb/service-2.png')}}');
              background-position: center right -22px;
            ">
                  <h4 class="border-b border-white w-16 text-sm text-white">Dịch vụ</h4>
                  <h3 class="mt-3 font-bold text-md text-white">VẬN CHUYỂN</h3>
                  <a href=""><button
                class="hover:bg-yellow-400 py-2 px-7 bg-white rounded-md mt-3 text-sm duration-1000"
              >
                Chi tiết
              </button></a
            >
          </div>
        </div>
        <div class="flex bg-lime-700 pl-3 py-5 rounded-lg">
          <div
            class="w-full bg-no-repeat"
            style="
              background-position: center right;
              background-image: url('{{asset('storage/anhweb/service-3.png')}}');
              background-position: center right -22px;
            "
          >
            <h4 class="border-b border-white w-16 text-sm text-white">Dịch vụ</h4>
            <h3 class="mt-3 font-bold text-md text-white">MUA HÀNG</h3>
            <a href=""
              ><button
                class="bg-black py-2 hover:bg-yellow-400 px-7 rounded-md mt-3 text-sm hover:text-black text-white duration-1000"
              >
                Chi tiết
              </button></a
            >
          </div>
        </div>
      </div>
      <!-- list website -->
      <div class="containers hidden lg:block pt-10 pb-10 bg-center" style="background-image: url('{{asset('storage/anhweb/tab-vertical-background-2.png')}};">
        <div class="flex">
          <h3 class="font-bold text-xl">Danh sách website mua sắm</h3>
          <span class="mt-1 ml-10 text-amber-600 hover:text-black"
            ><a href="#">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a
          ></span>
        </div>
        <p class="text-sm mt-2">
          Hơn 100 trang web mua sắm uy tín tại Nhật cho phép bạn thỏa sức chọn
          lựa.
        </p>
  
        <div class="grid grid-cols-5 gap-5 pt-8">
              <div class="px-3 py-3 rounded-xl hover:shadow-xl border border-gray-300 bg-white">
                  <a href="">
                      <img src="{{asset('storage/anhweb/amazon.png')}}" alt="" class="mx-auto" /></a>
                  <div>
                      <h4 class="font-bold">Amazon</h4>
                      <p class="text-sm text-gray-400 mt-3 pb-5">
                          Sàn thương mại điện tử Amazon Nhật Bản
                      </p>
                  </div>
              </div>
              <div class="px-3 py-3 rounded-xl hover:shadow-xl border border-gray-300 bg-white">
                  <a href="">
                      <img src="{{asset('storage/anhweb/amazon.png')}}" alt="" class="mx-auto" /></a>
                  <div>
                      <h4 class="font-bold">Amazon</h4>
                      <p class="text-sm text-gray-400 mt-3 pb-5">
                          Sàn thương mại điện tử Amazon Nhật Bản
                      </p>
                  </div>
              </div>
              <div class="px-3 py-3 rounded-xl hover:shadow-xl border border-gray-300 bg-white">
                  <a href="">
                      <img src="{{asset('storage/anhweb/amazon.png')}}" alt="" class="mx-auto" /></a>
                  <div>
                      <h4 class="font-bold">Amazon</h4>
                      <p class="text-sm text-gray-400 mt-3 pb-5">
                          Sàn thương mại điện tử Amazon Nhật Bản
                      </p>
                  </div>
              </div>
              <div class="px-3 py-3 rounded-xl hover:shadow-xl border border-gray-300 bg-white">
                  <a href="">
                      <img src="{{asset('storage/anhweb/amazon.png')}}" alt="" class="mx-auto" /></a>
                  <div>
                      <h4 class="font-bold">Amazon</h4>
                      <p class="text-sm text-gray-400 mt-3 pb-5">
                          Sàn thương mại điện tử Amazon Nhật Bản
                      </p>
                  </div>
              </div>
              <div class="px-3 py-3 rounded-xl hover:shadow-xl border border-gray-300 bg-white">
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
      <!--  -->
      <div class=" bg-no-repeat w-full bg-cover" style="background-image: url('{{asset('storage/anhweb/step-bg.png')}}">
          <div class="containers py-10">
              <div class="border-b mx-auto border-gray-400 text-center w-96">
                  <h3 class="text-white border-b-2 border-yellow-500 inline-block font-bold" style="padding: 0 40px 14px">
                      QUY TRÌNH MUA HÀNG
                  </h3>
              </div>
              <div class="containers py-20
              +">
                  <div class="">
                      <div class="grid grid-cols-5 gap-5">
                          <div class="bg-no-repeat service_flow__item text-center mt-10">
                              <div class="bg-no-repeat service_flow__step">Bước 1:</div>
                              <div class="w-full px-10">
                                  <img class="mx-auto w-full" style="max-width: 100%" src="{{asset('storage/anhweb/step-1.png')}}" alt="" />
                              </div>
                              <p class="text-xs mt-3">
                                  Tìm kiếm sản phẩm mà bạn muốn mua hoặc đấu giá và check giá sản phẩm.
                              </p>
                          </div>
                          <div class="bg-no-repeat service_flow__item text-center mt-10">
                              <div class="bg-no-repeat service_flow__step">Bước 2:</div>
                              <div class="w-full px-10">
                                  <img class="mx-auto w-full" style="max-width: 100%" src="{{asset('storage/anhweb/step-2.png')}}" alt="" />
                              </div>
                              <p class="text-xs mt-3">
                                  Tìm kiếm sản phẩm mà bạn muốn mua hoặc đấu giá và check giá sản phẩm.
                              </p>
                          </div>
                          <div class="bg-no-repeat service_flow__item text-center mt-10">
                              <div class="bg-no-repeat service_flow__step">Bước 3:</div>
                              <div class="w-full px-10">
                                  <img class="mx-auto w-full" style="max-width: 100%" src="{{asset('storage/anhweb/step-3.png')}}" alt="" />
                              </div>
                              <p class="text-xs mt-3">
                                  Tìm kiếm sản phẩm mà bạn muốn mua hoặc đấu giá và check giá sản phẩm.
                              </p>
                          </div>
                          <div class="bg-no-repeat service_flow__item text-center mt-10">
                              <div class="bg-no-repeat service_flow__step">Bước 4:</div>
                              <div class="w-full px-10">
                                  <img class="mx-auto w-full" style="max-width: 100%" src="{{asset('storage/anhweb/step-4.png')}}" alt="" />
                              </div>
                              <p class="text-xs mt-3">
                                  Tìm kiếm sản phẩm mà bạn muốn mua hoặc đấu giá và check giá sản phẩm.
                              </p>
                          </div>
                          <div class="bg-no-repeat service_flow__item text-center mt-10">
                              <div class="bg-no-repeat service_flow__step">Bước 5:</div>
                              <div class="w-full px-10">
                                  <img class="mx-auto w-full" style="max-width: 100%" src="{{asset('storage/anhweb/step-5.png')}}" alt="" />
                              </div>
                              <p class="text-xs mt-3">
                                  Tìm kiếm sản phẩm mà bạn muốn mua hoặc đấu giá và check giá sản phẩm.
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
  
      <div class="grid grid-cols-2 containers py-10 gap-8">
          <div class="bg-slate-800 px-5 py-7 rounded-md bg-no-repeat " style="background-image: url('{{asset('storage/anhweb/mailchimp-bg.png')}}; background-position: top -22px right -35px;">
              <h4 class="border-b-2 border-orange-400 font-bold text-xl text-white w-60 pb-2 ">ĐĂNG KÝ KHUYẾN MÃI</h4>
              <div class="w-60">
                  <p class="text-sm text-white mt-3 mb-3">Nhập vào địa chỉ email của bạn, để đăng ký nhận các thông tin khuyến mại</p>
                  <div class="relative">
                      <input type="email" class="bg-none p-2 w-60 rounded-md pr-10" placeholder="Email" />
                      <button class="absolute p-2 rounded-full top-0 left-48 ml-2 "><i class=" fas fa-paper-plane "></i></button>
                  </div>
              </div>
          </div>
          <div>
              <div class="flex border-b-2  border-orange-400">
                  <h4 class=" font-bold text-xl  pb-2 ">TIN TỨC NỔI BẬT</h4>
                  <div class="ml-auto ">
                      <button><i class="fas fa-angle-left text-xl"></i></button>
                      <button><i class="fas fa-angle-right text-xl"></i></button>
                  </div>
              </div>
          </div>
      </div>
      <!--footer-->
      <div class="bg-gray-100 mt-20 lg:block hidden ">
          <div class="border-b border-t border-gray-300 ">
              <div class="grid grid-cols-5 mt-10 containers py-7 gap-5 ">
                  <div class=" ">
                      <h4 class="font-bold ">Liên hệ</h4>
                      <div class="flex mt-5 ">
                          <i class="fas fa-map-marker-alt mt-1 mr-3 "></i>
                          <div>
                              <h4 class="font-bold text-sm ">Địa Chỉ:</h4>
                              <h4 class="text-sm ">
                                  〒136-0075 Tokyo, Koto City, Shinsuna, 3 Chome−10−8, 1F Warehouse 3
                              </h4>
                          </div>
                      </div>
                      <div class="flex mt-3 ">
                          <i class="fas fa-envelope mt-1 mr-2 "></i>
                          <div>
                              <h4 class="font-bold text-sm ">Email</h4>
                              <h5 class="text-sm hover:text-yellow-600 ">
                                  <a href=" ">duckhiem110@gmail.com</a>
                              </h5>
                          </div>
                      </div>
                  </div>
                  <div class=" ">
                      <h4 class="font-bold ">Về chúng tôi</h4>
                      <div class="mt-5 ">
                          <h4 class="text-sm mt-2 "><a href=" ">Về chúng tôi</a></h4>
                          <h4 class="text-sm mt-2 "><a href=" ">Blog</a></h4>
                          <h4 class="text-sm mt-2 ">
                              <a href=" ">Điều khoản & Chính sách</a>
                          </h4>
                      </div>
                  </div>
                  <div class=" ">
                      <h4 class="font-bold ">Dịch vụ khách hàng</h4>
                      <div class="mt-5 ">
                          <h4 class="text-sm hover:text-yellow-700 ">
                              <a href=" ">Trung tâm hỗ trợ</a>
                          </h4>
                          <h4 class="mt-2 text-sm hover:text-yellow-700 ">
                              <a href=" ">Chính sách bảo mật</a>
                          </h4>
                          <h4 class="mt-2 text-sm hover:text-yellow-700 ">
                              <a href=" ">Hàng cấm nhập khẩu</a>
                          </h4>
                          <h4 class="mt-2 text-sm hover:tex-yellow-700 ">
                              Câu hỏi thường gặp
                          </h4>
                          <h4 class="mt-2 text-sm hover:tex-yellow-700 ">Gửi câu hỏi</h4>
                      </div>
                  </div>
                  <div class=" ">
                      <h4 class="font-bold ">Thanh Toán & Vận Chuyển</h4>
                      <div class="mt-5 ">
                          <h4 class="text-sm hover:text-yellow-700 ">
                              <a href=" ">Biểu phí dịch vụ</a>
                          </h4>
                          <h4 class="mt-2 text-sm hover:text-yellow-700 ">
                              <a href=" ">Phương thức thanh toán</a>
                          </h4>
                          <h4 class="mt-2 text-sm hover:text-yellow-700 ">
                              <a href=" ">Phí gói</a>
                          </h4>
                          <h4 class="mt-2 text-sm hover:text-yellow-700 ">
                              <a href=" ">Biểu phí lưu kho</a>
                          </h4>
                          <h4 class="mt-2 text-sm hover:text-yellow-700 ">
                              <a href=" ">Phí vận chuyển quốc tế</a>
                          </h4>
                          <h4 class="mt-2 text-sm hover:text-yellow-700 ">
                              <a href=" ">Thủ tục giao hàng</a>
                          </h4>
                      </div>
                  </div>
                  <div class=" ">
                      <h4 class="font-bold ">Hướng Dẫn Sử Dụng</h4>
                      <div class="mt-5 ">
                          <h4 class="text-sm hover:text-yellow-700 ">
                              <a href=" ">Quy trình mua hàng</a>
                          </h4>
                          <h4 class="mt-2 text-sm hover:text-yellow-700 ">
                              <a href=" ">Quy trình đấu giá</a>
                          </h4>
                          <h4 class="mt-2 text-sm hover:text-yellow-700 ">
                              <a href=" ">Săn phút chót</a>
                          </h4>
                          <h4 class="mt-2 text-sm hover:text-yellow-700 ">
                              <a href=" ">Hướng dẫn đặt hàng nhanh</a>
                          </h4>
                          <h4 class="mt-2 text-sm hover:text-yellow-700 ">
                              <a href=" ">Về J-Point</a>
                          </h4>
                          <h4 class="mt-2 text-sm hover:text-yellow-700 ">
                              <a href=" ">Tín dụng đấu giá</a>
                          </h4>
                      </div>
                  </div>
              </div>
          </div>
          <div class="containers py-5 ">
              <div class="flex ">
                  <h4 class="font-bold mt-1 ">Kết nối với tôi</h4>
                  <div class="flex gap-5 ml-10 ">
                    <img class="w-8" src="{{asset('storage/anhweb/facebook.png')}}" alt="" />
                    <img class="w-8" src="{{asset('storage/anhweb/ter.png')}}" alt="" />
                    <img class="w-8" src="{{asset('storage/anhweb/intagam.png')}}" alt="" />
                    <img class="w-8" src="{{asset('storage/anhweb/yout.png')}}" alt="" />
                  </div>
              </div>
          </div>
          <div class="bg-amber-500 ">
              <div class="containers ">
                  <h5 class="text-center py-2 text-white ">
                      Copyright © 2022 - 2024 Chung Toi. All Rights Reserved
                  </h5>
              </div>
          </div>
      </div>
    </div>
    <!-- header -->
  
</body>
<script>
   var loader = document.querySelector('.loader')
  var content = document.querySelector('.content')
  window.addEventListener('load', function() {
 loader.style.display = "none"
 content.style.display = "block"})
</script>
</html>
