<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="correct-integrity-value-goes-here"
      crossorigin="anonymous">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"/>

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>

    <div class="bg-gray-50 shadow-md" x-data="{ isOpen: false }">
      <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
          <!-- Logo image -->
          <img class="h-10 ml-[-80px]" src="images/logo.png" alt="Logo">
          <!-- Navigation text -->
          <a class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-black md:text-3xl hover:text-yellow-400 ml-4 " href="/">
            𝑨𝒍-𝑺𝒉𝒖𝒎𝒐𝒖𝒌𝒉
          </a>
          <!-- Mobile menu button -->
          <div @click="isOpen = !isOpen" class="flex md:hidden">
            <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400" aria-label="toggle menu">
              <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
              </svg>
            </button>
          </div>
        </div>
        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div :class="isOpen ? 'flex' : 'hidden'" class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
        <a class="text-lg md:text-xl text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-black hover:text-yellow-400 " href="/">Home</a>
        <a class="text-lg md:text-xl text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-black hover:text-yellow-400 " href="{{ route('categories.index') }}">Categories</a>
        <a class="text-lg md:text-xl text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-black hover:text-yellow-400" href="{{ route('menus.index') }}">Our Menu</a>
        <a class="text-lg md:text-xl text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-black hover:text-yellow-400" href="{{ route('reservations.step.one') }}">Make Reservation</a>
        </div>
      </nav>
    </div>
    
    <div class="container max-w-lg px-4 py-32 mx-auto text-center bg-center bg-no-repeat bg-cover md:max-w-none"
          style="position: relative; height: 530px; display: flex; flex-direction: column; justify-content: center; align-items: center;">

     <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;
                 background-image: url('/images/1.jpg'); background-size: cover;
                 filter: blur(1px); z-index: -1;"></div>
  
     <h1 class="font-mono text-3xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-black to-yellow-300 md:text-center sm:leading-none lg:text-5xl">
         <span class="inline md:block">𝑾𝒆𝒍𝒄𝒐𝒎𝒆 To 𝑨𝒍-𝑺𝒉𝒖𝒎𝒐𝒖𝒌𝒉 𝑹𝒆𝒔𝒕𝒂𝒖𝒓𝒂𝒏𝒕</span>
     </h1>
     
     <p class="mx-auto mt-2 text-green-50 md:text-center lg:text-lg">
      𝑾𝒆𝒍𝒄𝒐𝒎𝒆 𝒕𝒐 𝒂 𝒄𝒖𝒍𝒊𝒏𝒂𝒓𝒚 𝒋𝒐𝒖𝒓𝒏𝒆𝒚 𝒂𝒕 𝒐𝒖𝒓 𝒓𝒆𝒔𝒕𝒂𝒖𝒓𝒂𝒏𝒕! 𝑹𝒆𝒔𝒆𝒓𝒗𝒆 𝒚𝒐𝒖𝒓 𝒕𝒂𝒃𝒍𝒆 𝒏𝒐𝒘</p>
     <div class="flex flex-col items-center mt-12">
         <a href="{{ route('reservations.step.one') }}" type="button"
            class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-yellow-600 rounded-full lg:w-full md:w-auto hover:bg-yellow-500 focus:outline-none">
            Make your Reservation
         </a>
     </div>
    </div>

    <section class="mt-8 py-20 bg-gray-50">
      <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
        <div class="flex flex-wrap items-center -mx-3">
          <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
            <div class="w-full lg:max-w-md">
              <h2 class="mb-4 text-2xl font-bold">ABOUT US</h2>
              <h2 class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-black hover:text-yellow-400"> WHY CHOOSE US?</h2>

              <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">
                𝑾𝒆𝒍𝒄𝒐𝒎𝒆 𝒕𝒐 𝒐𝒖𝒓 𝒓𝒆𝒔𝒕𝒂𝒖𝒓𝒂𝒏𝒕! 𝑾𝒆 𝒂𝒓𝒆 𝒅𝒆𝒍𝒊𝒈𝒉𝒕𝒆𝒅 𝒕𝒐 𝒉𝒂𝒗𝒆 𝒚𝒐𝒖 𝒋𝒐𝒊𝒏 𝒖𝒔 𝒇𝒐𝒓 
                𝒂 𝒄𝒖𝒍𝒊𝒏𝒂𝒓𝒚 𝒆𝒙𝒑𝒆𝒓𝒊𝒆𝒏𝒄𝒆 𝒍𝒊𝒌𝒆 𝒏𝒐 𝒐𝒕𝒉𝒆𝒓. 𝑹𝒆𝒔𝒆𝒓𝒗𝒆 𝒚𝒐𝒖𝒓 𝒕𝒂𝒃𝒍𝒆 𝒏𝒐𝒘 𝒂𝒏𝒅 𝒆𝒏𝒋𝒐𝒚 𝒂𝒏 𝒖𝒏𝒇𝒐𝒓𝒈𝒆𝒕𝒕𝒂𝒃𝒍𝒆 𝒅𝒊𝒏𝒊𝒏𝒈 𝒆𝒙𝒑𝒆𝒓𝒊𝒆𝒏𝒄𝒆.
              </p>
              <ul>
                <li class="flex items-center py-2 space-x-4 xl:py-3">
                  <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                    </path>
                  </svg>
                  <span class="font-medium text-gray-500">Comfort and Fast Service</span>
                </li>
                <li class="flex items-center py-2 space-x-4 xl:py-3">
                  <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                    </path>
                  </svg>
                  <span class="font-medium text-gray-500">100% Protection and Security for Your App</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img class="mx-auto sm:max-w-sm lg:max-w-full" src="/images/2.jpg" alt="feature image"></div>
        </div>
      </div>
    </section> 

    <section class="mt-9 bg-white">
      <div class="mt-4 text-center">
        <h3 class="mb-2 text-2xl font-bold">OUR MENU</h3>
        <h2 class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-black hover:text-yellow-400">
          TODAY'S SPECIALITY</h2>
      </div>
      <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
          @foreach ($Specialty->menus as $menu)
          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="{{ Storage::url($menu->image) }}" alt="Image" />
            <div class="px-6 py-4">
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-black uppercase">{{ ($menu->name) }}</h4>
              <p class="leading-normal text-gray-700">{{ ($menu->description) }}</p>
            </div>
            <div class="flex items-center justify-between p-4">
              <span class="text-xl text-black">{{ ($menu->price) }} DH</span>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>  

    <footer class="bg-gray-50 border-t border-gray-200">
      <div class="container flex flex-wrap items-center justify-center px-4 py-8 mx-auto lg:justify-between">
        <div class="flex flex-wrap justify-center">
         
          <p class="text-yellow-700"> 
          <i class="fas fa-map-marker-alt mr-2"></i> Maka Street, Laayoune, Morocco</p>
        </div>
        <div class="flex justify-center mt-4 lg:mt-0">
        
          <a href="tel:+1234567890" class="ml-3 text-yellow-700">
            <i class="fas fa-phone-alt"></i> 0500231245
          </a>
          <a href="https://www.facebook.com/your-facebook-account" class="ml-3 text-yellow-700">
            <i class="fab fa-facebook"></i> Facebook
          </a>
         
          <a href="https://www.instagram.com/your-instagram-account" class="ml-3 text-yellow-700">
            <i class="fab fa-instagram"></i> Instagram
          </a>
        </div>
      </div>
    </footer>

    </body>
</html>
