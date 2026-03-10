@extends('layouts.app')

@section('title', 'Login - My App')

@section('content')
<div class="w-full max-w-lg mx-auto transform transition-all duration-300">
    <!-- Auth Toggle Tabs -->
    <div class="flex justify-center mb-8 space-x-1 p-1 bg-gray-200/50 rounded-xl max-w-[280px] mx-auto">
        <a href="{{ route('register.view') }}" class="flex-1 text-center py-2 px-4 text-gray-500 hover:text-gray-700 font-medium rounded-lg transition-all duration-200">
            Register
        </a>
        <a href="{{ route('login') }}" class="flex-1 text-center py-2 px-4 shadow-sm bg-white text-indigo-700 font-bold rounded-lg transition-all duration-200">
            Login
        </a>
    </div>

    <!-- Main Card -->
    <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden">
        <div class="bg-gradient-to-r from-purple-600 to-indigo-600 px-8 py-10 text-center">
            <h1 class="text-3xl font-extrabold text-white tracking-tight">Welcome back!</h1>
            <p class="text-indigo-100 mt-2 font-medium opacity-90 text-sm">Please log in to continue your journey.</p>
        </div>

        <form class="p-8 space-y-5" action="{{ route('login') }}" method="POST">
            @csrf

            <div class="space-y-4">
                <!-- Email -->
                <div class="space-y-1.5">
                    <label for="email" class="text-xs font-bold text-gray-400 uppercase tracking-widest ml-1">Email Address</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-gray-400 group-focus-within:text-indigo-500 transition-colors">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required
                            class="w-full pl-11 pr-4 py-3 bg-gray-50 border-2 border-transparent rounded-xl focus:bg-white focus:border-indigo-500 focus:outline-none transition-all placeholder:text-gray-300 font-medium @error('email') border-red-500 @enderror"
                            placeholder="alex@example.com">
                    </div>
                </div>

                <!-- Password -->
                <div class="space-y-1.5">
                    <div class="flex items-center justify-between px-1">
                        <label for="password" class="text-xs font-bold text-gray-400 uppercase tracking-widest">Password</label>
                        <a href="#" class="text-xs text-indigo-500 hover:text-indigo-600 font-bold hover:underline">Forgot?</a>
                    </div>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-gray-400 group-focus-within:text-indigo-500 transition-colors">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <input id="password" name="password" type="password" required
                            class="w-full pl-11 pr-4 py-3 bg-gray-50 border-2 border-transparent rounded-xl focus:bg-white focus:border-indigo-500 focus:outline-none transition-all placeholder:text-gray-300 font-medium"
                            placeholder="••••••••">
                    </div>
                </div>
            </div>

            <div class="flex items-center space-x-3 pt-2">
                <input id="remember" name="remember" type="checkbox" class="h-5 w-5 text-indigo-600 rounded-md border-gray-300 focus:ring-indigo-500 cursor-pointer">
                <label for="remember" class="text-sm text-gray-500 cursor-pointer font-medium hover:text-gray-700 transition-colors">Stay logged in for a month</label>
            </div>

            <div class="pt-4 flex flex-col items-center">
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-black py-4 rounded-xl shadow-lg shadow-indigo-200 transition-all duration-300 transform hover:-translate-y-1 active:translate-y-0 text-center uppercase tracking-widest text-sm">
                    Enter Dashboard
                </button>
                <div class="mt-6 flex items-center space-x-2 text-sm text-gray-400">
                    <span>New here?</span>
                    <a href="{{ route('register.view') }}" class="text-indigo-800 font-black hover:underline uppercase tracking-tighter">Register Account</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection