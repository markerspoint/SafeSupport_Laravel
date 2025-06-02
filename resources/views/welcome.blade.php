<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SafeSupport</title>

        {{-- flat icon --}}
        <!-- Solid style -->
        <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css">
        <!-- Regular style -->
        <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
        <!-- Thin style -->
        <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-thin-rounded/css/uicons-thin-rounded.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:100,200,300,400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite('resources/css/welcome.css')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <header class="bg-gradient-to-b z-40 from-gray-50 to-gray-100 border-b border-gray-200">
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
                    <a href="#home" class="font-semibold hover:text-safegreen transition">Home</a>
                    <a href="#about" class="font-semibold hover:text-safegreen transition">About</a>
                    <a href="#" class="font-semibold hover:text-safegreen transition">Contact</a>
                    <a href="#" class="font-semibold hover:text-safegreen transition">Announcement</a>
                </div>
            
                <!-- Nav + Auth (desktop) -->
                <div class="hidden md:flex items-center gap-6">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-bold text-safegreen hover:text-safegreen/80 transition-colors duration-200">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-white bg-safegreen px-4 py-2 rounded-3xl transition hover:bg-transparent hover:text-safegreen hover:border-safegreen border border-transparent">
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
                class="fixed inset-0 bg-black bg-opacity-50 z-[60] md:hidden" 
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
                class="fixed top-0 right-0 h-full w-64 bg-gray-200 shadow-lg z-[70] flex flex-col p-6 space-y-6 md:hidden"
                style="display: none;"
                >
                <div class=" w-full border-b border-gray-300">

                </div>
                <a href="#home" class="font-semibold hover:text-safegreen">Home</a>
                <a href="#about" class="font-semibold hover:text-safegreen">About</a>
                <a href="#" class="font-semibold hover:text-safegreen">Contact</a>
                <a href="#" class="font-semibold hover:text-safegreen">Announcement</a>
                </div>

            </nav>            
        </header> 
        
        
        {{-- hero section --}}
            <section id="home" class="fade relative pt-[1rem] w-full h-[90vh] flex flex-col justify-center items-center bg-gradient-to-b from-gray-100 to-gray-200 text-center px-3">
                <h1 class="fade font-[300] text-gray-700" style="font-size: clamp(2.75rem, 5vw, 3.75rem);">
                Listen. Heal. Grow. <span class="font-semibold text-black"> Live.</span>
                </h1>
              

                    <h1 class="fade mt-4 text-gray-500 sm:max-w-xs md:max-w-xl lg:max-w-xl" style="font-size: clamp(0.115rem, 5vw, 1rem)">
                        Student, your feelings matter. Find the compassionate, professional counseling you need, made simple and always within reach.
                    </h1>   
                
                    <div class="fade mt-8 group">
                        <a href="{{ route('register') }}"
                           class="inline-flex items-center gap-2 bg-safegreen text-white font-semibold px-6 py-2 rounded-xl border border-safegreen transition-all duration-300 group-hover:bg-transparent group-hover:text-safegreen">
                            Book Now
                            <i class="fi fi-rr-arrow-right mt-1 text-white group-hover:text-safegreen text-xl transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                    
                                 
            </section>

            <!-- Cards Section (floating style) -->
            <div class="fade relative">
                <div class="container mx-auto -mt-20 lg:max-w-[66rem] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-4">
              
                {{-- card 1 --}}
                <div class="fade relative h-[350px] rounded-xl shadow-lg overflow-hidden group">
                    <div class="h-[270px] bg-cover bg-center transition-transform duration-500 ease-[cubic-bezier(.17,.67,.5,1.03)] group-hover:translate-y-[-150px]" 
                        style="background-image: url('/images/appointment.png');">
                    </div>
                
                    <!-- Static Info (Visible Always) -->
                    <div class="bg-white px-6 py-4 h-[150px]">
                    <h3 class="font-bold text-lg text-gray-600">Instant Appointment Booking</h3>
                    </div>
                
                    <!-- Hover Panel -->
                    <div class="absolute inset-0 bg-white px-6 py-4 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-[cubic-bezier(.17,.67,.5,1.03)]">
                    <h3 class="font-bold text-lg text-gray-600">Instant Appointment Booking</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        Book sessions with counselors at your convenience using our smart calendar interface.
                    </p>

                    <div class="absolute bottom-0 left-0 w-full h-1/2 bg-safegreen opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <p class="absolute bottom-4 left-0 w-full px-6 text-sm font-semibold text-[#ffffff] uppercase">
                        View Details
                    </p>
                    </div>
                </div>
                
              
                  <!-- Feature 2 -->
                  <div class="fade relative h-[350px] rounded-xl shadow-lg overflow-hidden group">
                    <div class="h-[270px] bg-cover bg-center transition-transform duration-500 ease-[cubic-bezier(.17,.67,.5,1.03)] group-hover:translate-y-[-150px]" 
                         style="background-image: url('/images/matching.png');">
                    </div>
                  
                    <!-- Static Info (Always Visible) -->
                    <div class="bg-white px-6 py-4 h-[150px]">
                      <h3 class="font-bold text-lg text-gray-600">Personalized Counselor Matching</h3>
                    </div>
                  
                    <!-- Hover Panel -->
                    <div class="absolute inset-0 bg-white px-6 py-4 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-[cubic-bezier(.17,.67,.5,1.03)]">
                      <h3 class="font-bold text-lg text-gray-600">Personalized Counselor Matching</h3>
                      <p class="text-gray-600 text-sm mt-2">
                        Get matched with the right professional based on your needs and preferences.
                      </p>

                      <div class="absolute bottom-0 left-0 w-full h-1/2 bg-safegreen opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                      <p class="absolute bottom-4 left-0 w-full px-6 text-sm font-semibold text-[#ffffff] uppercase">
                        View Details
                      </p>
                    </div>
                  </div>
              
                  <!-- Feature 3 -->
                <div class="fade relative h-[350px] rounded-xl shadow-lg overflow-hidden group">
                    <!-- Image -->
                    <div class="h-[270px] bg-cover bg-center transition-transform duration-500 ease-[cubic-bezier(.17,.67,.5,1.03)] group-hover:translate-y-[-150px]" 
                        style="background-image: url('/images/safespace.png');"></div>
                
                    <!-- Static Info -->
                    <div class="bg-white px-6 py-4 h-[150px]">
                    <h3 class="font-bold text-lg text-gray-600">Safe & Supportive Space</h3>
                    </div>
                
                    <!-- Hover Panel -->
                    <div class="absolute inset-0 bg-white px-6 py-4 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-[cubic-bezier(.17,.67,.5,1.03)]">
                    <h3 class="font-bold text-lg text-gray-600">Safe & Supportive Space</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        Connect with trusted professionals in a confidential setting designed to promote healing and growth.
                    </p>

                    <div class="absolute bottom-0 left-0 w-full h-1/2 bg-safegreen opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <p class="absolute bottom-4 left-0 w-full px-6 text-sm font-semibold text-[#ffffff] uppercase">
                        View Details
                    </p>
                    </div>
                </div>
                
              
                  <!-- Feature 4 -->
                <div class="fade relative h-[350px] rounded-xl shadow-lg overflow-hidden group">
                    <!-- Image -->
                    <div class="h-[270px] bg-cover bg-center transition-transform duration-500 ease-[cubic-bezier(.17,.67,.5,1.03)] group-hover:translate-y-[-150px]"
                        style="background-image: url('/images/security.png');"></div>
                
                    <!-- Static Info -->
                    <div class="bg-white px-6 py-4 h-[150px]">
                    <h3 class="font-bold text-lg text-gray-600">Confidential & Secure</h3>
                    </div>
                
                    <!-- Hover Panel -->
                    <div class="absolute inset-0 bg-white px-6 py-4 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-[cubic-bezier(.17,.67,.5,1.03)]">
                    <h3 class="font-bold text-lg text-gray-600">Confidential & Secure</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        All communication is encrypted end-to-end, ensuring your privacy and safety throughout the experience.
                    </p>

                    <div class="absolute bottom-0 left-0 w-full h-1/2 bg-safegreen opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <p class="absolute bottom-4 left-0 w-full px-6 text-sm font-semibold text-[#ffffff] uppercase">
                        View Details
                    </p>
                    </div>
                </div>
                </div>
              </div>
              
  
            <!-- about Section -->
            <section id="about" class="fade max-w-full lg:max-w-[54rem] mx-auto mt-14 pt-20 pb-20">
                <div class="container mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
                
                  <!-- left: Mission & Vision Text -->
                  <div class="fade">
                    <h2 class="text-3xl font-bold mb-6 text-gray-600">About Us</h2>
              
                    <div class="mb-8">
                      <h3 class="text-xl font-semibold text-safegreen mb-2">Our Mission</h3>
                      <p class="text-gray-600 text-sm leading-relaxed">
                        To empower individuals by providing accessible, personalized mental health support through a secure and empathetic platform.
                      </p>
                    </div>
              
                    <div>
                      <h3 class="text-xl font-semibold text-safegreen mb-2">Our Vision</h3>
                      <p class="text-gray-600 text-sm leading-relaxed">
                        We envision a world where mental well-being is a priority, and everyone has access to compassionate, professional counseling regardless of background or location.
                      </p>
                    </div>
                  </div>
              
                  <!-- right: image stack, flex center vertically -->
                  <div class="fade relative w-full mx-auto lg:max-w-[40rem] flex items-center justify-center" style="min-height: 25rem;">
                    <!-- Bottom Left Image -->
                    <img src="/images/counsel3.png" alt="Therapy Room"
                         class="absolute 
                                top-[5rem] left-[2.5rem] 
                                w-[16rem] h-[16rem] 
                                sm:w-[12rem] sm:h-[12rem] sm:top-[3rem] sm:left-[1.5rem]
                                md:w-[14rem] md:h-[14rem] md:top-[4rem] md:left-[2rem]
                                object-cover rounded-xl shadow-2xl z-10">
              
                    <!-- Top Middle Image (raised above) -->
                    <img src="/images/counsel2.png" alt="Support Group"
                         class="absolute
                                top-[2.5rem] left-[9rem] translate-y-1/2 
                                w-[16rem] h-[16rem] 
                                sm:w-[12rem] sm:h-[12rem] sm:left-[6rem] 
                                md:w-[14rem] md:h-[14rem] md:left-[7rem]
                                object-cover rounded-xl shadow-2xl z-20">
              
                    <!-- Bottom Right Image -->
                    <img src="/images/counsel1.png" alt="Counseling Session"
                         class="absolute 
                                top-[5rem] left-[16rem] 
                                w-[16rem] h-[15rem] 
                                sm:w-[12rem] sm:h-[11rem] sm:top-[3rem] sm:left-[10rem] 
                                md:w-[14rem] md:h-[13rem] md:top-[4rem] md:left-[12rem]
                                object-cover rounded-xl shadow-2xl z-30">
                  </div>
            </div>
            </section>              

    </body>
</html>
