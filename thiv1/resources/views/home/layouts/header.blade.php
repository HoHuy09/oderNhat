   <!-- header -->
   <div class="bg-amber-600 hidden lg:block sticky top-0 z-10">
    <div class="containers pt-4 ">
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