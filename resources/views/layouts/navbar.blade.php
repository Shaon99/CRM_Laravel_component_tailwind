<header
    class="relative z-20 flex items-center justify-between w-full px-6 py-2 bg-gray-100 border border-zinc-200 dark:border-white/10 dark:bg-zinc-900 dark:bg-bodyDark">
    <!-- Empty Left Space for Sidebar Alignment -->
    <div></div>

    <!-- Icons and Profile -->
    <div class="relative flex items-center space-x-6">
        <!-- Theme Toggle Button -->
        <button id="theme-toggle" type="button"
            class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-10 text-sm rounded-lg w-10 inline-flex bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-800 dark:text-white !text-zinc-300 hover:!text-zinc-800 dark:hover:!text-white">
            <span id="theme-toggle-icon"> <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v2m0 14v2m9-9h-2m-14 0H3m16.364-6.364l-1.414 1.414M6.05 18.364l-1.414-1.414M18.364 18.364l-1.414-1.414M6.05 5.636l-1.414 1.414M12 8a4 4 0 100 8 4 4 0 000-8z" />
            </svg></span>
        </button>

        <!-- Profile Dropdown -->
        <div class="relative">
            <div class="w-8 h-8 rounded-full border border-[#ef552c] overflow-hidden cursor-pointer"
                id="profile-dropdown-toggle">
                <img src="{{ asset('assets/image/logo.png') }}" alt="Profile Picture" class="object-cover w-8 h-8">
            </div>
            <!-- Dropdown -->
            <div id="profile-dropdown"
                class="absolute right-0 z-50 hidden w-40 py-2 mt-2 bg-white rounded-lg shadow-lg dark:bg-bodyDark">
                <div
                    class="flex flex-row items-center justify-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <x-heroicon-o-user class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-300" />
                    <a href="#" class="text-gray-700 dark:text-gray-300">Profile</a>
                </div>
                <div
                    class="flex flex-row items-center justify-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <x-heroicon-o-arrow-right-start-on-rectangle
                        class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-300" />
                    <a href="index.html" class="text-gray-700 dark:text-gray-300">Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>
