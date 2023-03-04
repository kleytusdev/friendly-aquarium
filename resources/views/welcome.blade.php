<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body>
        <nav class="bg-gray-800 px-10 py-9">
          <div class="flex items-center justify-start">
            <!-- Logo -->
            <div class="flex-shrink-0 ml-4">
              <img class="h-8 w-8" src="https://via.placeholder.com/50" alt="Logo">
            </div>
            <!-- Navigation links -->
            <div class="ml-28">
              <ul class="flex">
                <li class="mx-14">
                  <a href="#" class="text-gray-300 hover:text-white">Home</a>
                </li>
                <li class="mx-14">
                  <a href="#" class="text-gray-300 hover:text-white">About</a>
                </li>
                <li class="mx-14">
                  <a href="#" class="text-gray-300 hover:text-white">Contact</a>
                </li>
                <div class="flex mx-[48vw]">
                  @if (Route::has('login'))
                          @auth
                            @else
                            <li class="mx-5">
                              <a href="{{ route('login') }}" class="text-gray-300 hover:text-white">Login</a>
                            </li>
                            @if (Route::has('register'))
                              <li class="mx-5">
                              <a href="{{ route('register') }}" class="text-gray-300 hover:text-white">Register</a>
                            </li>
                            @endif
                          @endauth
                  @endif
                </div>
              </ul>
            </div>
          </div>
        </nav>

    </body>
</html>
