<header class="bg-white shadow-sm border-b border-gray-200">
    <div class="flex items-center justify-between px-6 py-4">
        <div class="flex items-center space-x-4">
            <button onclick="toggleSidebar()" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <h2 id="page-title" class="text-2xl font-semibold text-gray-800">Dashboard</h2>
        </div>

        <div class="flex items-center space-x-4">
            <div class="relative">
                <button class="text-gray-500 hover:text-gray-700 relative">
                    <i class="fas fa-bell text-xl"></i>
                    <span
                        class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                </button>
            </div>
            <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                    <span class="text-white text-sm font-medium">KV</span>
                </div>
                <div class="hidden md:block">
                    <p class="text-sm font-medium text-gray-700">Kuldeep</p>
                    <p class="text-xs text-gray-500">Administrator</p>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="w-full flex items-center px-4 py-3 text-gray-300 transition-all duration-200 rounded-xl group">
                    <div
                        class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-500">
                        <i class="fas fa-sign-out-alt text-white group-hover:text-white"></i>
                    </div>
                    <!-- <span class="ml-3 font-medium text-black">Logout</span> -->
                    <!-- <div class="ml-auto">
                        <i class="fas fa-arrow-right text-xs opacity-0 group-hover:opacity-100 transition-opacity"></i>
                    </div> -->
                </button>
            </form>
        </div>
    </div>
</header>