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
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="bg-gray-200">
      <div class="container mx-auto">
        <div class="py-40 px-10 md:px-36 pb-56">
          <div class="grid grid-cols-1 lg:grid-cols-12">
            <div
              class="col-1 md:col-span-6 bg-white rounded-l-md p-3 pt-5 pb-5 md:p-20"
            >
              <div class="mx-2 md:mx-0 xxl:mx-8">
                <div class="flex">
                  <h4 class="font-bold text-2xl text-center mb-3">
                    Forgot Your Password?
                  </h4>
                  <i class="fas mt-2 fa-times ml-auto"></i>
                </div>
                <p>
                  We get it, stuff happens. Just enter your email address below
                  and we'll send you a link to reset your password!
                </p>
              </div>
              <div class="pt-10 px-3 md:px-0">
                  @if (session('msg'))
                      <span class="text-red-500">{{ session('msg') }}</span>
                    @endif
                  <form action="" method="post">
                      @csrf
                    <h4 class="mb-2">Email</h4>
                    <input
                      type="text"
                      name="email"
                      class="rounded-md w-full border-2 border-gray-400 p-2"
                      placeholder="Enter Email Address"
                    />
                    <h4 class="mb-2">Password</h4>
                    <input
                      type="password"
                      name="password"
                      class="rounded-md w-full border-2 border-gray-400 p-2"
                      placeholder="Enter New Password"
                    />
                    <button
                    type="submit"
                  class="xxl:px-32 pt-2 w-full pb-2 rounded-xl mt-5 hover:bg-red-500 text-white border-2 border-blue-500"
                  style="
                    background: linear-gradient(
                      to right,
                      #ee7724,
                      #d8363a,
                      #dd3675,
                      #b44593
                    );
                  "
                >
                  Reset Password
                </button>
                  </form>
              </div>
              <div class="text-md mt-10 text-blue-400 text-center">
                <h5>Create an Account!</h5>
                <h5>Already have an account? Login!</h5>
              </div>
            </div>
            <div class="md:col-span-6 md:block hidden">
              <div
                class="h-full rounded-r-md"
                style="
                  background-image: url('{{asset('storage/anhweb/photo-1517519014922-8fc06b814a0e.jpeg')}}');
                "
              ></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
