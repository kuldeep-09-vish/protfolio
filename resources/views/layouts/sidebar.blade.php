<aside id="sidebar"
    class="fixed left-0 top-0 h-full w-64 bg-gradient-to-b from-gray-900 to-gray-800 text-white sidebar-transition z-50 shadow-2xl">
    <!-- Header Section -->
    <div class="p-6 border-b border-gray-700/50">
        <div class="flex items-center space-x-3">
            <div
                class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center shadow-lg">
                <i class="fab fa-laravel text-2xl text-white"></i>
            </div>
            <div>
                <h1 class="text-xl font-bold text-white">Laravel Admin</h1>
                <p class="text-gray-400 text-sm">Kuldeep Vishwakarma</p>
            </div>
        </div>
    </div>

    <!-- Navigation Section -->
    <nav class="flex-1 py-6 px-3 overflow-y-auto">
        <div class="mb-8">
            <div class="space-y-1">

                <!-- Dashboard -->
                <a href="{{ route('dashboard') }}"
                    class="nav-item group flex items-center px-4 py-3 
                    {{ request()->routeIs('dashboard') ? 'bg-gray-700/70 text-white shadow-md' : 'text-gray-300' }} 
                    hover:bg-gray-700/50 hover:text-white transition-all duration-200 rounded-xl mx-1">
                    <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-blue-500/20 group-hover:bg-blue-500/30">
                        <i class="fas fa-tachometer-alt text-blue-400"></i>
                    </div>
                    <span class="ml-3 font-medium">Dashboard</span>
                </a>

                <!-- Admin Data -->
                <a href="{{ route('admindata') }}"
                    class="nav-item group flex items-center px-4 py-3 
                    {{ request()->routeIs('admindata') ? 'bg-gray-700/70 text-white shadow-md' : 'text-gray-300' }} 
                    hover:bg-gray-700/50 hover:text-white transition-all duration-200 rounded-xl mx-1">
                    <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-green-500/20 group-hover:bg-green-500/30">
                        <i class="fas fa-users text-green-400"></i>
                    </div>
                    <span class="ml-3 font-medium">Admin Data</span>
                </a>

                <!-- About -->
                <a href="{{route('admin.about')}}"
                    class="nav-item group flex items-center px-4 py-3 
                    {{ request()->routeIs('about') ? 'bg-gray-700/70 text-white shadow-md' : 'text-gray-300' }} 
                    hover:bg-gray-700/50 hover:text-white transition-all duration-200 rounded-xl mx-1">
                    <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-indigo-500/20 group-hover:bg-indigo-500/30">
                        <i class="fas fa-user text-indigo-400"></i>
                    </div>
                    <span class="ml-3 font-medium">About</span>
                </a>

                <!-- Skills -->
                <a href="{{route('admin.skill')}}"
                    class="nav-item group flex items-center px-4 py-3 
                    {{ request()->routeIs('skills') ? 'bg-gray-700/70 text-white shadow-md' : 'text-gray-300' }} 
                    hover:bg-gray-700/50 hover:text-white transition-all duration-200 rounded-xl mx-1">
                    <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-purple-500/20 group-hover:bg-purple-500/30">
                        <i class="fas fa-file-alt text-purple-400"></i>
                    </div>
                    <span class="ml-3 font-medium">Skills</span>
                </a>

                <!-- Resume -->
                <a href="#"
                    class="nav-item group flex items-center px-4 py-3 
                    {{ request()->routeIs('resume') ? 'bg-gray-700/70 text-white shadow-md' : 'text-gray-300' }} 
                    hover:bg-gray-700/50 hover:text-white transition-all duration-200 rounded-xl mx-1">
                    <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-yellow-500/20 group-hover:bg-yellow-500/30">
                        <i class="fas fa-chart-bar text-yellow-400"></i>
                    </div>
                    <span class="ml-3 font-medium">Resume</span>
                </a>

                <!-- Portfolio -->
                <a href="#"
                    class="nav-item group flex items-center px-4 py-3 
                    {{ request()->routeIs('portfolio') ? 'bg-gray-700/70 text-white shadow-md' : 'text-gray-300' }} 
                    hover:bg-gray-700/50 hover:text-white transition-all duration-200 rounded-xl mx-1">
                    <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-indigo-500/20 group-hover:bg-indigo-500/30">
                        <i class="fas fa-briefcase text-indigo-400"></i>
                    </div>
                    <span class="ml-3 font-medium">Portfolio</span>
                </a>

                <!-- Services -->
                <a href="#"
                    class="nav-item group flex items-center px-4 py-3 
                    {{ request()->routeIs('services') ? 'bg-gray-700/70 text-white shadow-md' : 'text-gray-300' }} 
                    hover:bg-gray-700/50 hover:text-white transition-all duration-200 rounded-xl mx-1">
                    <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-green-500/20 group-hover:bg-green-500/30">
                        <i class="fas fa-concierge-bell text-green-400"></i>
                    </div>
                    <span class="ml-3 font-medium">Services</span>
                </a>

                <!-- Testimonials -->
                <a href="#"
                    class="nav-item group flex items-center px-4 py-3 
                    {{ request()->routeIs('testimonials') ? 'bg-gray-700/70 text-white shadow-md' : 'text-gray-300' }} 
                    hover:bg-gray-700/50 hover:text-white transition-all duration-200 rounded-xl mx-1">
                    <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-indigo-500/20 group-hover:bg-indigo-500/30">
                        <i class="fas fa-comment-dots text-indigo-400"></i>
                    </div>
                    <span class="ml-3 font-medium">Testimonials</span>
                </a>

                <!-- Settings -->
                <a href="#"
                    class="nav-item group flex items-center px-4 py-3 
                    {{ request()->routeIs('settings') ? 'bg-gray-700/70 text-white shadow-md' : 'text-gray-300' }} 
                    hover:bg-gray-700/50 hover:text-white transition-all duration-200 rounded-xl mx-1">
                    <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-orange-500/20 group-hover:bg-orange-500/30">
                        <i class="fas fa-list-alt text-orange-400"></i>
                    </div>
                    <span class="ml-3 font-medium">Settings</span>
                </a>

            </div>
        </div>
    </nav>
</aside>
