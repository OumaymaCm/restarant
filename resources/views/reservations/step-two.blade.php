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
    <div class="bg-white shadow-md" x-data="{ isOpen: false }">
      <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
          <!-- Logo image -->
          <img class="h-10 ml-[-80px]" src="/images/logo.png" alt="Logo">
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
    
    <div class="container w-full px-5 py-6 mx-auto ">
        <div class="flex items-center min-h-screen bg-gray-20">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl mt-[-90px]">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img class="object-cover w-full h-full" 
                                src="/images/10.jpg" alt="" />
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-600">Make Reservation</h3>
                            <div class="w-full bg-gray-200 rounded-full">
                                <div class="w-100 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                    Step 2</div>
                            </div>
                            <form method="POST" action="{{ route('reservations.store.step.two') }}">
                                @csrf
                                <div class="sm:col-span-6 pt-5">
                                    <label for="status" class="block text-sm font-medium text-gray-700"> Table </label>
                                    <div class="mt-1">
                                        <select id="table_id" name="table_id" class="form-multiselect block w-full mt-1">
                                            @foreach ($tables as $table)
                                                <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                                    {{ $table->name }} ({{ $table->guest_number}} Guests)</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-6 p-4 flex justify-between">
                                    <a href="{{ route('reservations.step.one') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Previous</a>
                                    <button type="submit" 
                                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Make Reservation</button>
                                </div>
                            </form>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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