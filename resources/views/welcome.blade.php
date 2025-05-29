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
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <header class="bg-white shadow">
            <nav class="mx-16 p-8 flex justify-between items-center">

                <!-- Left Section: Logo and Nav Links -->
                <div class="flex items-center gap-12">
                    <!-- Logo with Text -->
                    <a href="{{ url('/') }}" class="text-xl font-semibold flex items-center gap-1">
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
            </nav>
        </header> 
        
        
            <section id="home" class="w-full h-dvh md:h-screen pt-3 flex flex-col justify-center items-center bg-gradient-to-b from-gray-100 to-gray-300 text-center px-3">
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
                
                    <div class="mt-12">
                        <img src="/path-to-your-screenshot.png" alt="SafeSupport Preview" class="rounded-xl shadow-lg max-w-4xl w-full">
                    </div>

            </section>

    </body>
</html>
