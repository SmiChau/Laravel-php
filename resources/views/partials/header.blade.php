<nav class="bg-white border-b border-gray-100/50 backdrop-blur-xl sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Logo Section -->
            <div class="flex items-center">
                <a href="{{ route('register.view') }}" class="group flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-tr from-indigo-600 to-purple-600 rounded-xl flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-300">
                        <span class="text-white font-black text-xl">M</span>
                    </div>
                    <span class="text-2xl font-black tracking-tighter bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">MYAPP</span>
                </a>
            </div>

            <!-- Navigation Actions -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('login') }}" class="px-5 py-2.5 text-sm font-bold text-gray-600 hover:text-indigo-600 hover:bg-indigo-50/50 rounded-xl transition-all duration-200">
                    Log In
                </a>
                <a href="{{ route('register.view') }}" class="px-6 py-2.5 bg-indigo-600 text-white text-sm font-black rounded-xl shadow-md shadow-indigo-100 hover:bg-indigo-700 hover:shadow-indigo-200 transition-all duration-300 transform hover:-translate-y-0.5 active:translate-y-0">
                    Join Now
                </a>
            </div>
        </div>
    </div>
</nav>