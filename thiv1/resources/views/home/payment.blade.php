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
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/index.css">
</head>

<body>
    <!-- header -->
    <div class="sticky top-0 z-10 lg:block hidden" style="background: #001c40;">
        <div class="containers py-4">
            <div class="grid grid-cols-12 gap-10">
                <div class="col-span-3 lg:col-span-2 mx-auto">
                    <a href="{{route('home')}}"><img class="h-10" src="{{asset('storage/anhweb/logo.png')}}" alt="" /></a>
                </div>
                <div class="col-span-6 lg:col-span-7">
                    <div class="relative">
                        <input type="text" class="w-full p-1 mt-1 pr-20 rounded-md" />
                        <i class="fas fa-search absolute top-3 right-6"></i>
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
                    <!-- ?????u gi?? -->
                    <div class="hidden md:block">
                        <i class="fas fa-gavel text-2xl text-white"></i>
                    </div>
                    <!-- gi??? h??ng -->
                    <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                        <div @mouseover="open = true">
                            <i class="fab fa-opencart text-2xl text-white block"></i>
                        </div>
                        <div x-show="open" x-transition.scale.origin.right class="absolute bg-white w-72 right-0 py-24 mt-2 bg-white shadow-xl">
                            <img class="w-full px-20" src="{{asset('storage/anhweb/cart-empty.svg')}}" alt="" />
                            <div class="text-center">
                                <h4 class="font-bold mt-3">Gi??? h??ng tr???ng!</h4>
                                <p class="text-xs mt-3">
                                    kh??ng c?? s???n ph???m trong gi??? h??ng c???a b???n
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end gi??? h??ng -->
                    <!-- thong b??o -->
                    <div x-data="{ open: false }" @mouseleave="open = false" class="relative hidden lg:block">
                        <div @mouseover="open = true">
                            <i class="fas fa-bell text-2xl text-white"></i>
                        </div>
                        <div x-show="open" x-transition.scale.origin.right class="absolute bg-white w-72 pb-32 right-0 pt-5 pl-5 mt-2 bg-white shadow-xl">
                            <h4 class="font-bold">Th??ng b??o</h4>
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
                <h4 class="">T???t c??? danh m???c</h4>
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
                        <h4 class="mt-1 font-bold">??u ????i</h4>
                    </a>
                </div>
            </div>
            <div class="col-span-2 flex">
                <i class="fas fa-home text-xl text-amber-600 mr-2"></i>
                <h4 class="font-bold mt-1">B??n ??? nh???t b???n</h4>
            </div>
        </div>
    </div>
    <div class="bg-gray-200 py-3 lg:block hidden">
        <div class="containers">
            <a href="">
                <div class="text-sm flex hover:text-amber-600">
                    <i class="fas fa-home text-sm mr-3"></i>
                    <h5 class="">Trang ch???</h5>
                </div>
            </a>
        </div>
    </div>
    <!-- content -->
    <div class="containers">
        <div class="grid grid-cols-12 gap-5 mt-5">
            <div class="col-span-7  ">
                <div class="border border-gray-300 px-5 py-5 pb-10">
                    <div class="flex">
                        <img src="{{asset('storage/anhweb/frame-1.png')}}" alt="" />
                        <h4 class="font-bold text-md mt-1 ml-3">
                            1. Ki???m tra th??ng tin nh???n h??ng
                        </h4>
                    </div>
                    <div class="mt-10 border border-gray-300 px-5 py-5">
                        <form action="">
                            <div class="px-10 py-10">
                                <div class="gap-5">
                                    <div>
                                        <h5 class="text-sm font-bold">H??? t??n*</h5>
                                        <input class="w-full pl-2 text-xs border-b mt-2 border-gray-300 pb-1 outline-none" type="text" placeholder="H??? t??n..." />
                                    </div>
                                </div>
                                <div class=" mt-5">
                                    <div>
                                        <h5 class="text-sm font-bold">?????a ch???*</h5>
                                        <input class="w-full pl-2 text-xs border-b mt-2 border-gray-300 pb-1 outline-none" type="text" placeholder="M?? b??u ??i???n..." />
                                    </div>
                                </div>

                                <div class=" mt-5">
                                    <div>
                                        <h5 class="text-sm font-bold">Email*</h5>
                                        <input class="w-full pl-2 text-xs border-b mt-2 border-gray-300 pb-1 outline-none" placeholder="T??n ???????ng..." type="text" />
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div>
                                        <h5 class="text-sm font-bold">S??? ??i???n tho???i*</h5>
                                        <input class="w-full pl-2 text-xs border-b mt-2 border-gray-300 pb-1 outline-none" type="text" placeholder="Nh???p t??n..." />
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div>
                                        <h5 class="text-sm font-bold">Tr???ng th??i*</h5>
                                        <input class="w-full pl-2 text-xs border-b mt-2 border-gray-300 pb-1 outline-none" type="text" placeholder="Nh???p t??n..." />
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-span-5">
                <div class="border border-gray-300 px-5 py-5">
                    <div class="flex">
                        <i class="fab fa-amazon-pay text-2xl"></i>
                        <h4 class="font-bold text-md mt-1 ml-3">
                            Thanh to??n
                        </h4>
                    </div>
                    <div class="mt-10  py-5">
                        <div class="grid grid-cols-2 gap-5">
                            <div class="mx-auto">
                                <img class="w-20 mx-auto" src="{{asset('storage/anhweb/Logo_Vietinbank.png')}}" alt="">
                                <p class="text-xs flex mt-3">
                                    S??? t??i kho???n: <span class="text-gray-600">123456789</span>
                                    </span>
                                </p>
                                <p class="text-xs flex">
                                    T??n t??i kho???n: <span class="text-gray-600">Nguy???n V??n A</span>
                                    </span>
                                </p>
                                <p class="text-xs flex">
                                    <span class="text-xs">
                                        Ng??n h??ng: <span class="text-gray-600">Vietinbank</span>
                                    </span>
                                </p>
                            </div>
                            <div class="mx-auto">
                                <img class="w-20 mx-auto" src="{{asset('storage/anhweb/Logo_Vietinbank.png')}}" alt="">
                                <p class="text-xs flex mt-3">
                                    S??? t??i kho???n: <span class="text-gray-600">123456789</span>
                                    </span>
                                </p>
                                <p class="text-xs flex">
                                    T??n t??i kho???n: <span class="text-gray-600">Nguy???n V??n A</span>
                                    </span>
                                </p>
                                <p class="text-xs flex">
                                    <span class="text-xs">
                                        Ng??n h??ng: <span class="text-gray-600">Vietinbank</span>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="text-center mt-10">
                            <h3 class="text-xs">C?? ph??p thanh to??n</h3>
                            <div class="border border-gray-400 w-60 mx-auto py-3 rounded-md">
                                sp-02323323
                            </div>
                        </div>
                        <div class="w-52 mx-auto mt-5">
                            <img src="{{asset('storage/anhweb/qr.png')}}" alt="">
                        </div>
                        <img class="w-full mt-5 h-24 mx-auto" src="{{asset('storage/anhweb/2.png')}}" alt="">
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
                    <h4 class="font-bold">Li??n h???</h4>
                    <div class="flex mt-5">
                        <i class="fas fa-map-marker-alt mt-1 mr-3"></i>
                        <div>
                            <h4 class="font-bold text-sm">?????a Ch???:</h4>
                            <h4 class="text-sm">
                                ???136-0075 Tokyo, Koto City, Shinsuna, 3 Chome???10???8, 1F Warehouse 3
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
                    <h4 class="font-bold">V??? ch??ng t??i</h4>
                    <div class="mt-5">
                        <h4 class="text-sm mt-2"><a href="">V??? ch??ng t??i</a></h4>
                        <h4 class="text-sm mt-2"><a href="">Blog</a></h4>
                        <h4 class="text-sm mt-2">
                            <a href="">??i???u kho???n & Ch??nh s??ch</a>
                        </h4>
                    </div>
                </div>
                <div class="">
                    <h4 class="font-bold">D???ch v??? kh??ch h??ng</h4>
                    <div class="mt-5">
                        <h4 class="text-sm hover:text-yellow-700">
                            <a href="">Trung t??m h??? tr???</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Ch??nh s??ch b???o m???t</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">H??ng c???m nh???p kh???u</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:tex-yellow-700">
                            C??u h???i th?????ng g???p
                        </h4>
                        <h4 class="mt-2 text-sm hover:tex-yellow-700">G???i c??u h???i</h4>
                    </div>
                </div>
                <div class="">
                    <h4 class="font-bold">Thanh To??n & V???n Chuy???n</h4>
                    <div class="mt-5">
                        <h4 class="text-sm hover:text-yellow-700">
                            <a href="">Bi???u ph?? d???ch v???</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Ph????ng th???c thanh to??n</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Ph?? g??i</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Bi???u ph?? l??u kho</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Ph?? v???n chuy???n qu???c t???</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Th??? t???c giao h??ng</a>
                        </h4>
                    </div>
                </div>
                <div class="">
                    <h4 class="font-bold">H?????ng D???n S??? D???ng</h4>
                    <div class="mt-5">
                        <h4 class="text-sm hover:text-yellow-700">
                            <a href="">Quy tr??nh mua h??ng</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Quy tr??nh ?????u gi??</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">S??n ph??t ch??t</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">H?????ng d???n ?????t h??ng nhanh</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">V??? J-Point</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">T??n d???ng ?????u gi??</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="containers py-5">
            <div class="flex">
                <h4 class="font-bold mt-1">K???t n???i v???i t??i</h4>
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
                    Copyright ?? 2022 - 2024 Chung Toi. All Rights Reserved
                </h5>
            </div>
        </div>
    </div>
</body>

</html>