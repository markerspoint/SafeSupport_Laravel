<!-- resources/views/components/sidebar.blade.php -->
<div 
    x-data="{ open: true, openSection: null }" 
    class="h-screen bg-white border-r transition-all duration-300"
    :class="{ 'w-[14rem]': open, 'w-[3rem]': !open }"
>

    <!-- Toggle Button -->
    <div class="flex justify-end p-2">
        <button @click="open = !open" class="flex w-full items-center gap-x-2 text-gray-600 hover:text-safegreen">
            <p x-show="open"
                x-transition:enter="transition duration-200 ease-out"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition duration-150 ease-in"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                x-cloak
                class="text-[1.3rem] font-[900] text-gray-600 hover:text-safegreen"
            >
                SafeSupport
            </p>
            <i 
                :class="open ? 'ml-[3rem]' : 'ml-0'"
                class="ph ph-sidebar !text-[2rem]"></i>
        </button>
    </div>

    <!-- Horizontal Line -->
    <div class="border-t border-gray-300 mx-4 mb-2"></div>

    <!-- Sidebar Content -->
    <nav class="space-y-2 mt-4 px-2">

        <!-- Appointments -->
        <div>
            <button @click="openSection === 'appointments' ? openSection = null : openSection = 'appointments'"
                class="w-full flex items-center justify-between ml-2 text-left text-gray-800 font-medium hover:text-safegreen">
                <span class="flex items-center gap-2">
                    <i class="ph ph-calendar-check"></i>
                    <span x-show="open">Appointments</span>
                </span>
                <i x-show="open" :class="{ 'rotate-90': openSection === 'appointments' }"
                   class="ph ph-caret-right transition-transform duration-200 mr-3"></i>
            </button>
            <div x-show="openSection === 'appointments' && open"
                x-cloak
                x-transition:enter="transition-opacity duration-400 ease-out"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity duration-400 ease-in"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="ml-9 mt-1 space-y-1">
                <a href="#" class="block text-sm text-gray-600 hover:text-safegreen">View</a>
                <a href="#" class="block text-sm text-gray-600 hover:text-safegreen">Book</a>
            </div>
        </div>

        <!-- Counselors -->
        <div>
            <button @click="openSection === 'counselors' ? openSection = null : openSection = 'counselors'"
                class="w-full flex items-center justify-between ml-2 text-left text-gray-800 font-medium hover:text-safegreen">
                <span class="flex items-center gap-2">
                    <i class="ph ph-users-three"></i>
                    <span x-show="open">Counselors</span>
                </span>
                <i x-show="open" :class="{ 'rotate-90': openSection === 'counselors' }"
                   class="ph ph-caret-right transition-transform duration-200 mr-3"></i>
            </button>
                <div x-show="openSection === 'counselors' && open"
                    x-cloak
                    x-transition:enter="transition-opacity duration-400 ease-out"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity duration-400 ease-in"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="ml-9 mt-1 space-y-1">
                    <a href="#" class="block text-sm text-gray-600 hover:text-safegreen">View</a>
                </div>
        </div>

        <!-- Resource Library -->
        <div>
            <button @click="openSection === 'resources' ? openSection = null : openSection = 'resources'"
                class="w-full flex items-center justify-between ml-2 text-left text-gray-800 font-medium hover:text-safegreen">
                <span class="flex items-center gap-2">
                    <i class="ph ph-books"></i>
                    <span x-show="open">Resources</span>
                </span>
                <i x-show="open" :class="{ 'rotate-90': openSection === 'resources' }"
                   class="ph ph-caret-right transition-transform mr-3 duration-200"></i>
            </button>
            <div x-show="openSection === 'resources' && open"
                x-cloak
                x-transition:enter="transition-opacity duration-400 ease-out"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity duration-400 ease-in"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="ml-9 mt-1 space-y-1">
                <a href="#" class="block text-sm text-gray-600 hover:text-safegreen">Videos</a>
                <a href="#" class="block text-sm text-gray-600 hover:text-safegreen">Tools</a>
                <a href="#" class="block text-sm text-gray-600 hover:text-safegreen">Articles</a>
            </div>
        </div>  
    </nav>
</div>
