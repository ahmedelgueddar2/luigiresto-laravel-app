<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/all.min.css','resources/css/style.css','resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class=" antialiased">
      <section class="navigation">
        <div class="w-full text-gray-700 bg-white dark:text-gray-200 dark:bg-gray-800">
            <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="flex flex-row items-center justify-between p-4">
                    <a href="#" class="text-4xl"> <span class="text-4xl font-bold text-orange-500">Luigi</span>Resto</a>
                    <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row ">
                    <a class="px-4 py-2 mt-2 text-lg font-semibold bg-transparent rounded-lg dark:text-white dark:hover:bg-orange-600 dark:focus:bg-orange-600 dark:focus:text-white dark:hover:text-white dark:text-orange-200 md:mt-0 md:ml-4 hover:text-orange-900 focus:text-orange-900 hover:bg-orange-200 focus:bg-orange-200 focus:outline-none focus:shadow-outline" href="/">Home</a>

                    <a class="px-4 py-2 mt-2 text-lg font-semibold bg-transparent rounded-lg dark:text-white dark:hover:bg-orange-600 dark:focus:bg-orange-600 dark:focus:text-white dark:hover:text-white dark:text-orange-200 md:mt-0 md:ml-4 hover:text-orange-900 focus:text-orange-900 hover:bg-orange-200 focus:bg-orange-200 focus:outline-none focus:shadow-outline" href="{{ route('categories.index') }}">Category</a>
                    <a class="px-4 py-2 mt-2 text-lg font-semibold bg-transparent rounded-lg dark:text-white dark:hover:bg-orange-600 dark:focus:bg-orange-600 dark:focus:text-white dark:hover:text-white dark:text-orange-200 md:mt-0 md:ml-4 hover:text-orange-900 focus:text-orange-900 hover:bg-orange-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('menus.index') }}">Menus</a>
                    <a class="px-4 py-2 mt-2 text-lg font-semibold bg-transparent rounded-lg dark:text-white dark:hover:bg-orange-600 dark:focus:bg-orange-600 dark:focus:text-white dark:hover:text-white dark:text-orange-200 md:mt-0 md:ml-4 hover:text-orange-900 focus:text-orange-900 hover:bg-orange-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('reservations.step.one') }}">Reservations</a>

                </nav>
            </div>
        </div>
      </section>
                {{ $slot }}
    <footer class=" p-10 mx-auto text-white dark:bg-gray-800">
      <div class="container">
        <div class="flex flex-col md:flex-row flex-wrap justify-center">
          <div class="w-full md:basis-[30%] md:min-w-[250px] mb-5">
            <div class="logo">
              <h1 class="text-4xl font-bold"> <span class="text-4xl text-orange-600">Luigi</span>Resto</h1>
              <p class="max-w-[270px] mt-1">Lorem ipsum dolor amet consectetur adipisicing elit dolor sit amet consectetur blanditiis?</p>
              <h6 class="font-bold mt-2 border rounded-xl max-w-[200px] text-center text-orange-300">Designed by : <br> El gueddar & Benbiga</h5>
            </div>
          </div>
          <div class="w-full md:basis-[27%] md:min--[250px] mb-5">
           <div class="menu">
             <h1 class="text-2xl font-bold">Useful Links</h1>
             <ul>
               <li class="mb-2 hover:font-bold transition-all duration-150 ease-in-out"><a href="" class="underline">Home</a></li>

               <li class="mb-2 hover:font-bold transition-all duration-150 ease-in-out"><a href="" class="underline">Menus</a></li>
               <li class="mb-2 hover:font-bold transition-all duration-150 ease-in-out"><a href="" class="underline">Categories</a></li>
               <li class="mb-2 hover:font-bold transition-all duration-150 ease-in-out"><a href="" class="underline">Make Resuervations</a></li>
             </ul>
           </div>
         </div>
         <div class="w-full md:basis-[27%] md:min-w-[250px] mb-5">
           <div class="menu">
             <h1 class="text-2xl font-bold">Social Links</h1>
             <ul>
               <li class="mb-2 hover:font-bold transition-all duration-150 ease-in-out"><a href="" class=" text-lg">Faceook <i class="fab fa-facebook"></i></a></li>
               <li class="mb-2 hover:font-bold transition-all duration-150 ease-in-out"><a href="" class=" text-lg">Twitter <i class="fab fa-twitter"></i></a></li>
               <li class="mb-2 hover:font-bold transition-all duration-150 ease-in-out"><a href="" class=" text-lg">Instagram <i class="fab fa-instagram"></i></a></li>

             </ul>
           </div>
         </div>
       </div>
      </div>
    </footer>
    </body>
</html>
