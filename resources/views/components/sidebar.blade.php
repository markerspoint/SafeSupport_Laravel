<!-- resources/views/components/sidebar.blade.php -->
<div 
    x-data="{ open: true }" 
    class="h-screen bg-white border-r transition-all duration-300"
    :class="{ 'w-[14rem]': open, 'w-[3rem]': !open }"
>

    <!-- Toggle Button -->
    <div class="flex justify-end p-2">
        <button @click="open = !open" class="flex w-full items-center gap-x-2 text-gray-600 hover:text-safegreen">
            <p x-show="open"
                x-show="open"
                x-transition:enter="transition duration-200 ease-out"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition duration-150 ease-in"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                x-cloak
                class="text-[1.3rem] font-[900] text-gray-600 hover:text-safegreen"
                >SafeSupport</p>
            <i 
            :class="open ? 'ml-[3rem]' : 'ml-0'"
            class="lni lni-menu-cheesburger !text-[2rem]"></i>
        </button>
    </div>

    <!-- Horizontal Line -->
    <div class="border-t border-gray-300 mx-4 mb-2"></div>

    <!-- Sidebar Content -->
    <nav class="space-y-2 mt-4 px-2">
        <a href="#" class="flex items-center space-x-2 p-2 rounded hover:bg-gray-100">
            <i class="lni lni-briefcase-2"></i>
            <span x-show="open" class="text-gray-700">Appointments</span>
        </a>

        <a href="#" class="flex items-center space-x-2 p-2 rounded hover:bg-gray-100">
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M5 13l4 4L19 7" />
            </svg>
            <span x-show="open" class="text-gray-700">Counselors</span>
        </a>

        <!-- Add more items here -->
    </nav>
</div>
