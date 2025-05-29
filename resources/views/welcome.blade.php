<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SafeSupport</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite('resources/css/welcome.css')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <header class="bg-gradient-to-b z-10 from-gray-50 to-gray-100 border-b border-gray-200">
            {{-- <nav class="mx-16 p-8 flex justify-between items-center">

                <!-- Left Section: Logo and Nav Links -->
                <div class="flex items-center gap-12">
                    <!-- Logo with Text -->
                    <a href="{{ url('/') }}" class="text-xl font-bold flex items-center gap-1 hover:text-safegreen transition-colors duration-200">
                        <span>SafeSupp</span>
                        <img src="{{ asset('images/safecenter.png') }}" alt="O logo" class="h-6 w-6 object-contain inline-block">
                        <span>rt</span>
                    </a>
                </div>
                

                    <!-- Nav Links -->
                <div class="hidden md:flex gap-6 text-gray-700">
                    <a href="#" class="text-gray-700 font-semibold hover:text-safegreen transition-all duration-300">Home</a>
                    <a href="#" class="text-gray-700 font-semibold hover:text-safegreen transition-all duration-300">About</a>
                    <a href="#" class="text-gray-700 font-semibold hover:text-safegreen transition-all duration-300">Contact</a>                                                        
                    <a href="#" class="text-gray-700 font-semibold hover:text-safegreen transition-all duration-300">Announcement</a>                                                        
                </div>
        
                <!-- Right Section: Auth Links -->
                <div class="flex gap-5">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="font-semibold text-white bg-safegreen px-4 py-2 rounded-3xl border border-transparent transition-colors duration-300 hover:bg-white hover:text-safegreen hover:border-safegreen">
                            Log in
                        </a>                        
        
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="font-semibold text-gray-600 hover:text-safegreen px-4 py-2 border border-transparent hover:border-safegreen transition-colors duration-300 rounded-3xl">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav> --}}

            {{-- alpineJS nav --}}
            <nav x-data="{ open: false }" class="relative mx-4 md:mx-16 p-6 flex flex-wrap justify-between items-center">

                <!-- Logo -->
                <div class="flex items-center gap-2">
                    <a href="{{ url('/') }}" class="text-xl font-bold flex items-center text-gray-600 gap-1 hover:text-safegreen transition-colors duration-200">
                        <span>SafeSupp</span>
                        <img src="{{ asset('images/safecenter.png') }}" alt="Logo" class="h-6 w-6 object-contain">
                        <span>rt</span>
                    </a>
                </div>
            
                <!-- Burger icon (mobile only) -->
                <button @click="open = !open" class="md:hidden text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <div class="hidden lg:flex gap-6 text-gray-700">
                    <a href="#" class="font-semibold hover:text-safegreen transition">Home</a>
                    <a href="#" class="font-semibold hover:text-safegreen transition">About</a>
                    <a href="#" class="font-semibold hover:text-safegreen transition">Contact</a>
                    <a href="#" class="font-semibold hover:text-safegreen transition">Announcement</a>
                </div>
            
                <!-- Nav + Auth (desktop) -->
                <div class="hidden md:flex items-center gap-6">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-white bg-safegreen px-4 py-2 rounded-3xl transition hover:bg-white hover:text-safegreen hover:border-safegreen border border-transparent">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-gray-600 px-4 py-2 border hover:border-safegreen transition hover:text-safegreen rounded-3xl">
                                    Register
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            
                <!-- Nav + Auth (mobile menu) -->
                <!-- Overlay -->
                <div
                x-show="open"
                x-transition.opacity
                @click="open = false"
                class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden" 
                style="display: none;"
                ></div>

                <!-- Sidebar -->
                <div
                x-show="open"
                x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
                class="fixed top-0 right-0 h-full w-64 bg-gray-200 shadow-lg z-50 flex flex-col p-6 space-y-6 md:hidden"
                style="display: none;"
                >
                <div class=" w-full border-b border-gray-300">

                </div>
                <a href="#" class="font-semibold hover:text-safegreen">Home</a>
                <a href="#" class="font-semibold hover:text-safegreen">About</a>
                <a href="#" class="font-semibold hover:text-safegreen">Contact</a>
                <a href="#" class="font-semibold hover:text-safegreen">Announcement</a>
                </div>

            </nav>            
        </header> 
        
        
        {{-- hero section --}}
            <section id="home" class="pt-[1rem] w-full h-[90vh] flex flex-col justify-center items-center bg-gradient-to-b from-gray-100 to-gray-300 text-center px-3">
                <h1 class="font-light text-gray-700" style="font-size: clamp(2.75rem, 5vw, 3.75rem);">
                Listen. Heal. Grow. <span class="font-semibold text-black"> Live.</span>
                </h1>
              

                    <h1 class="mt-4 text-gray-500 sm:max-w-xs md:max-w-xl lg:max-w-xl" style="font-size: clamp(0.115rem, 5vw, 1rem)">
                        Student, your feelings matter. Find the compassionate, professional counseling you need, made simple and always within reach.
                    </h1>   
                
                    <div class="mt-8">
                        <a href="{{ route('register') }}"
                        class="bg-safegreen text-white font-semibold px-6 py-3 rounded-xl hover:bg-white hover:text-safegreen border-2 border-safegreen transition-all">
                            Get Started
                        </a>
                    </div>                
                
                    {{-- <div class="mt-12">
                        <img src="/path-to-your-screenshot.png" alt="SafeSupport Preview" class="rounded-xl shadow-lg max-w-4xl w-full">
                    </div> --}}
            </section>

            <!-- Cards Section (floating style) -->
            <div class="relative z-10">
                <div class="container mx-auto -mt-20 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-4">
              
                <!-- Card Template -->
                <div class="relative h-[350px] rounded-xl shadow-lg overflow-hidden group">
                    <!-- Image -->
                    <div class="h-[270px] bg-cover bg-center transition-transform duration-500 ease-[cubic-bezier(.17,.67,.5,1.03)] group-hover:translate-y-[-150px]" 
                        style="background-image: url('/images/appointment.png');">
                    </div>
                
                    <!-- Static Info (Visible Always) -->
                    <div class="bg-white px-6 py-4 h-[150px]">
                    <h3 class="font-bold text-lg text-gray-900">Instant Appointment Booking</h3>
                    </div>
                
                    <!-- Hover Panel -->
                    <div class="absolute inset-0 bg-white px-6 py-4 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-[cubic-bezier(.17,.67,.5,1.03)]">
                    <h3 class="font-bold text-lg text-gray-900">Instant Appointment Booking</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        Book sessions with counselors at your convenience using our smart calendar interface.
                    </p>
                    <p class="absolute bottom-4 left-0 w-full px-6 text-sm font-semibold text-[#4e958b] uppercase">
                        View Details
                    </p>
                    </div>
                </div>
                
              
                  <!-- Repeat for other features -->
              
                  <!-- Feature 2 -->
                  <div class="relative h-[350px] rounded-xl shadow-lg overflow-hidden group">
                    <!-- Image -->
                    <div class="h-[270px] bg-cover bg-center transition-transform duration-500 ease-[cubic-bezier(.17,.67,.5,1.03)] group-hover:translate-y-[-150px]" 
                         style="background-image: url('/images/matching.png');">
                    </div>
                  
                    <!-- Static Info (Always Visible) -->
                    <div class="bg-white px-6 py-4 h-[150px]">
                      <h3 class="font-bold text-lg text-gray-900">Personalized Counselor Matching</h3>
                    </div>
                  
                    <!-- Hover Panel -->
                    <div class="absolute inset-0 bg-white px-6 py-4 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-[cubic-bezier(.17,.67,.5,1.03)]">
                      <h3 class="font-bold text-lg text-gray-900">Personalized Counselor Matching</h3>
                      <p class="text-gray-600 text-sm mt-2">
                        Get matched with the right professional based on your needs and preferences.
                      </p>
                      <p class="absolute bottom-4 left-0 w-full px-6 text-sm font-semibold text-[#4e958b] uppercase">
                        View Details
                      </p>
                    </div>
                  </div>
              
                  <!-- Feature 3 -->
                <div class="relative h-[350px] rounded-xl shadow-lg overflow-hidden group">
                    <!-- Image -->
                    <div class="h-[270px] bg-cover bg-center transition-transform duration-500 ease-[cubic-bezier(.17,.67,.5,1.03)] group-hover:translate-y-[-150px]" 
                        style="background-image: url('/images/safespace.png');"></div>
                
                    <!-- Static Info -->
                    <div class="bg-white px-6 py-4 h-[150px]">
                    <h3 class="font-bold text-lg text-gray-900">Safe & Supportive Space</h3>
                    </div>
                
                    <!-- Hover Panel -->
                    <div class="absolute inset-0 bg-white px-6 py-4 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-[cubic-bezier(.17,.67,.5,1.03)]">
                    <h3 class="font-bold text-lg text-gray-900">Safe & Supportive Space</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        Connect with trusted professionals in a confidential setting designed to promote healing and growth.
                    </p>
                    <p class="absolute bottom-4 left-0 w-full px-6 text-sm font-semibold text-[#4e958b] uppercase">
                        View Details
                    </p>
                    </div>
                </div>
                
              
                  <!-- Feature 4 -->
                <div class="relative h-[350px] rounded-xl shadow-lg overflow-hidden group">
                    <!-- Image -->
                    <div class="h-[270px] bg-cover bg-center transition-transform duration-500 ease-[cubic-bezier(.17,.67,.5,1.03)] group-hover:translate-y-[-150px]"
                        style="background-image: url('/images/security.png');"></div>
                
                    <!-- Static Info -->
                    <div class="bg-white px-6 py-4 h-[150px]">
                    <h3 class="font-bold text-lg text-gray-900">Confidential & Secure</h3>
                    </div>
                
                    <!-- Hover Panel -->
                    <div class="absolute inset-0 bg-white px-6 py-4 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-[cubic-bezier(.17,.67,.5,1.03)]">
                    <h3 class="font-bold text-lg text-gray-900">Confidential & Secure</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        All communication is encrypted end-to-end, ensuring your privacy and safety throughout the experience.
                    </p>
                    <p class="absolute bottom-4 left-0 w-full px-6 text-sm font-semibold text-[#4e958b] uppercase">
                        View Details
                    </p>
                    </div>
                </div>
                
              
                </div>
              </div>
              
  
            <!-- Next Section -->
            <section class="bg-white py-20">
                <div class="container mx-auto text-center">
                <h2 class="text-2xl font-bold">Next Section Starts Here</h2>
                </div>
            </section>

    </body>
</html>
