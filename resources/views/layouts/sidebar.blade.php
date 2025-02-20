<div id="sidebar"
    class="fixed z-40 flex flex-col h-screen bg-gray-100 w-[60px] md:w-[180px] lg:w-[200px] transition-all duration-300 dark:bg-bodyDark border-r border-zinc-200 dark:border-white/10">
    <!-- Logo Section -->
    <div id="logo-section" class="flex items-center justify-between px-4 py-4 transition-all duration-300">
        <div class="flex items-center">
            <img id="logo-image" src="{{ asset('assets/image/logo.png') }}" alt="Logo"
                class="hidden w-8 h-8 md:inline-block">
            <span id="logo-text"
                class="hidden ml-2 text-xs font-bold text-gray-800 md:inline-block lg:text-lg dark:text-gray-300">Second
                Source</span>
        </div>
        <button id="mobile-menu-toggle" class="text-2xl text-gray-800 md:hidden dark:text-gray-300">
            <!-- Menu Icon (shown by default) -->
            <svg id="menu-icon" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="size-5">
                <path d="M3 5H11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                <path d="M3 12H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                <path d="M3 19H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
            </svg>
            <!-- Close Icon (hidden by default) -->
            <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="hidden w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

    </div>

    <!-- Navigation Menu -->
    <div class="flex-1 px-4 py-6 overflow-y-auto">
        <div class="space-y-2">
            <a href="{{ route('dashboard') }}"
                class="flex items-center text-gray-800 py-2 hover:text-[#ef552c] cursor-pointer dark:text-gray-100 dark:hover:text-[#ef552c]">
                <x-heroicon-o-home class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-100" />
                <span class="hidden md:inline-block sidebar-text">Dashboard</span>
            </a>
            <a href="{{ route('customers.index') }}"
                class="flex items-center text-gray-800 py-2 hover:text-[#ef552c] cursor-pointer dark:text-gray-200 dark:hover:text-[#ef552c]">
                <x-heroicon-o-users class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-100" />
                <span class="hidden md:inline-block sidebar-text">Customers</span>
            </a>
        </div>
    </div>
</div>
