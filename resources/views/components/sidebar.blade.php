<!-- resources/views/components/sidebar.blade.php -->
<div 
    x-data="{ open: true }" 
    class="h-screen bg-white border-r transition-all duration-300"
    :class="{ 'w-64': open, 'w-20': !open }"
>

    <!-- Toggle Button -->
    <div class="flex justify-end p-2">
        <button @click="open = !open" class="text-gray-600 hover:text-black">
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Sidebar Content -->
    <nav class="space-y-2 mt-4 px-2">
        <a href="#" class="flex items-center space-x-2 p-2 rounded hover:bg-gray-100">
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M3 12h18M3 6h18M3 18h18" />
            </svg>
            <span x-show="open" class="text-gray-700">Dashboard</span>
        </a>

        <a href="#" class="flex items-center space-x-2 p-2 rounded hover:bg-gray-100">
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M5 13l4 4L19 7" />
            </svg>
            <span x-show="open" class="text-gray-700">Appointments</span>
        </a>

        <!-- Add more items here -->
    </nav>
</div>
