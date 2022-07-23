
<!DOCTYPE html>
<html>
<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <style>
        body {
            font-family: "Inter", sans-serif;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</head>
<body class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      {{ $message }}
      </div>
  @endif
    <div class="max-w-screen-xl m-0 sm:m-20 bg-white shadow sm:rounded-lg flex justify-center flex-1">
        <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
            <div class="mt-12 flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-extrabold">
                    registration </h1>
                <div class="w-full flex-1 mt-8">
                    <div class="my-12 border-b text-center">
                    <div class="mx-auto max-w-xs">
                        <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                         @csrf
                        <input type="text" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white " name="name"  placeholder="User name">
                        @error('name')
                        <div style="color: #ff0000;">{{$message}}</div>
                      @enderror

                    <input type="text" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5" name="email" placeholder="Email" >
                    @error('email')
                    <div style="color: #ff0000;">{{$message}}</div>
                  @enderror

                    <input type="text" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5" name="phone"  placeholder="Phone number">
                    @error('phone')
                    <div style="color: #ff0000;">{{$message}}</div>
                  @enderror
                    <input type="file" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5" name="image" placeholder="Image" >

                    @error('image')
                    <div style="color: #ff0000;">{{$message}}</div>
                  @enderror
                  <select class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5" name="role">
                        <option value="">Select Option</option>
                        <option value="2">Photographer</option>
                        <option value="5">User</option>
                      </select>
                      @error('role')
                      <div style="color: #ff0000;">{{$message}}</div>
                    @enderror
                        <input type="password" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5" name="password" placeholder="password">
                        @error('passwoard')
                        <div style="color: #ff0000;">{{$message}}</div>
                      @enderror
                    <input type="password" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5" name="password_confirmation" placeholder="Password confirmation">

                    @error('password_confirmation')
                    <div style="color: #ff0000;">{{$message}}</div>
                  @enderror
                  @if ($message = Session::get('match'))
                  <div style="color: #ff0000;">
                  {{ $message }}
                  </div>
                @endif
                        <button class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none" style="background-color:  #F9A392" type="submit">
                            <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                <circle cx="8.5" cy="7" r="4" />
                                <path d="M20 8v6M23 11h-6" />
                            </svg>
                            <span class="ml-3">
                                Sign Up
                            </span>
                        </button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1  text-center hidden lg:flex" style="background-color: #F9A392">
            <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat" style="background-image: url('{{asset('img/carouse-4.webp')}}') ; width: 70%; margin-left:15%; "></div>
        </div>
    </div>

</form>
</body>

</html>


















