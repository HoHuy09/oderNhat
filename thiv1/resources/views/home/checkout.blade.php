<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
                <img class="w-full px-20" src="./image/cart-empty.svg" alt="" />
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
    <div class="containers grid lg:grid-cols-12 py-3">
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
    <div class="bg-gray-200 py-3">
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
      <h1 class="text-2xl font-bold mt-5">
        Giỏ hàng <span class="font-medium text-sm">(1 sản phẩm)</span>
      </h1>
      <div class="flex text-sm mt-5">
        <input type="checkbox" class="mt-1 w-10" name="" id="" />
        <h4 class="font-semibold border-r pr-2 border-gray-500">
          Chọn tất cả - <span>1</span> sản phẩm (số lượng <span>1</span>)
        </h4>
        <button class="pl-2 hover:text-red-500">Xóa tất cả</button>
      </div>
      <div class="grid grid-cols-12 mt-5 gap-10">
        <div class="col-span-8">
          <button
            class="border-2 border-yellow-500 text-yellow-500 py-1 w-full hover:bg-yellow-500 hover:text-white"
          >
            <i class="fas fa-plus pr-3"></i>Thêm sản phẩm
          </button>
          <!-- form giỏ hàng -->
          <div class=" grid grid-cols-1   mt-3   gap-5">
            <div class="flex border border-gray-400  py-3 px-3">
              <div class=" mt-3">
                <input type="checkbox" name="" id="">
                <img class="w-48" src="./image/12.png" alt="">
             </div>
             <div class=" grid grid-cols-2 mt-3 gap-3 ">
                 <div><h3 class="font-bold text-md">ラングスジャパン(RANGS) リップスティックデラックスミニ ブルー</h3>
                     <h5 class="text-sm mt-3">Color: <span>tim</span></h5>
                     <h5 class="text-sm">Phí vận chuyển nội địa: <span class="font-bold">Đang cập nhật</span></h5>
                     <p class="text-sm">Ghi chú:</p>
                     <textarea class="border border-gray-500 mt-1" name="" id="" cols="30" rows="2"></textarea>
                 </div>
                 <div class="grid grid-cols-2">
                         <div class="flex h-8 ml-auto">
                           <button class="px-2 py-1 bg-gray-400 text-sm">-</button>
                           <input
                             type="text"
                             class="w-14 py-1 text-center border border-gray-300 text-sm"
                             value="1"
                           />
                           <button class="px-2 py-1 bg-gray-400 text-sm">+</button>
                         </div>
                         <div class="ml-auto">
                             <h5><span class="font-bold">131,526 ¥</span></h5>
                             <button class="mr-auto text-sm hover:text-red-500">Xóa</button>
                         </div>
                 </div>
             </div>
            </div>
            <div class="flex border border-gray-400  py-3 px-3">
              <div class=" mt-3">
                <input type="checkbox" name="" id="">
                <img class="w-48" src="./image/12.png" alt="">
             </div>
             <div class=" grid grid-cols-2 mt-3 gap-3 ">
                 <div><h3 class="font-bold text-md">ラングスジャパン(RANGS) リップスティックデラックスミニ ブルー</h3>
                     <h5 class="text-sm mt-3">Color: <span>tim</span></h5>
                     <h5 class="text-sm">Phí vận chuyển nội địa: <span class="font-bold">Đang cập nhật</span></h5>
                     <p class="text-sm">Ghi chú:</p>
                     <textarea class="border border-gray-500 mt-1" name="" id="" cols="30" rows="2"></textarea>
                 </div>
                 <div class="grid grid-cols-2">
                         <div class="flex h-8 ml-auto">
                           <button class="px-2 py-1 bg-gray-400 text-sm">-</button>
                           <input
                             type="text"
                             class="w-14 py-1 text-center border border-gray-300 text-sm"
                             value="1"
                           />
                           <button class="px-2 py-1 bg-gray-400 text-sm">+</button>
                         </div>
                         <div class="ml-auto">
                             <h5><span class="font-bold">131,526 ¥</span></h5>
                             <button class="mr-auto text-sm hover:text-red-500">Xóa</button>
                         </div>
                 </div>
             </div>
            </div>
          </div>
        </div>
        <div
          class="col-span-4 border border-gray-300 bg-no-repeat py-10 bg-center bg-cover"
          style="background-image: url('./image/bg-modal-header.png')"
        >
          <h4 class="px-5 font-bold  text-xl">Thanh toán</h4>
         <div>
            <div class="flex text-sm px-5 mt-5 ">
                <p>Tổng tiền sản phẩm (<span>0</span> sản phẩm)</p>
                <p class="text-right font-bold ml-auto">0 đ</p>
              </div>
              <div class="flex text-sm px-5 mt-3">
                <p>Phí dịch vụ</p>
                <p class="text-right font-bold ml-auto">0 đ</p>
              </div>
              <div class="flex text-sm px-5 mt-3">
                <p>Phí thanh toán</p>
                <p class="text-right font-bold ml-auto">0 đ</p>
              </div>
              <div class="flex font-bold px-5 mt-5">
                <p class="">Tổng</p>  <span class="ml-auto">0</span> đ</div>
              </div>
              <div class="px-5 mt-3 ">
                <a href="" ><button class="bg-amber-600 text-white w-full text-md py-1 hover:bg-amber-500">Tiến hành đặt hàng</button></a>
                 <p class="text-xs mt-2 text-gray-400">*Quý khách nên thanh toán ngay tránh sản phẩm bị tăng giá do chênh lệch tỉ giá</p>
               </div>
         </div>
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
            <img class="w-8" src="./image/facebook.png" alt="" />
            <img class="w-8" src="./image/ter.png" alt="" />
            <img class="w-8" src="./image/intagam.png" alt="" />
            <img class="w-8" src="./image/yout.png" alt="" />
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
