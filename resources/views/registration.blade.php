@extends('layouts.app')

@section('title', 'Create Your Account')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-indigo-50 via-white to-purple-50">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-indigo-400 to-purple-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-tr from-pink-400 to-indigo-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
        <div class="absolute top-40 left-40 w-80 h-80 bg-gradient-to-r from-purple-400 to-indigo-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
    </div>

    <div class="w-full max-w-2xl mx-auto transform transition-all duration-300 relative z-10">
        <!-- Auth Toggle Tabs - Enhanced -->
        <div class="flex justify-center mb-8">
            <div class="bg-white/50 backdrop-blur-sm p-1 rounded-2xl shadow-lg border border-white/20">
                <div class="flex space-x-1">
                    <a href="{{ route('register.view') }}" 
                       class="px-6 py-2.5 text-sm font-bold rounded-xl transition-all duration-300 transform hover:scale-105
                              bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg shadow-indigo-500/25">
                        <span class="relative flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                            <span>Register</span>
                        </span>
                    </a>
                    <a href="{{ route('login') }}" 
                       class="px-6 py-2.5 text-sm font-bold rounded-xl transition-all duration-300
                              text-gray-600 hover:text-indigo-600 hover:bg-white/60">
                        <span class="relative flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            <span>Login</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Card - Enhanced -->
        <div class="bg-white/90 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20 overflow-hidden">
            <!-- Header with Animated Gradient -->
            <div class="relative bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 px-8 py-12 text-center overflow-hidden">
                <!-- Animated Background Pattern -->
                <div class="absolute inset-0 opacity-10">
                    <svg class="absolute left-0 top-0 h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <defs>
                            <pattern id="grid" width="8" height="8" patternUnits="userSpaceOnUse">
                                <path d="M 8 0 L 0 0 0 8" fill="none" stroke="white" stroke-width="0.5"/>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#grid)"/>
                    </svg>
                </div>
                
                <!-- Floating Orbs -->
                <div class="absolute top-0 left-0 w-32 h-32 bg-white/10 rounded-full blur-2xl transform -translate-x-1/2 -translate-y-1/2"></div>
                <div class="absolute bottom-0 right-0 w-40 h-40 bg-white/10 rounded-full blur-2xl transform translate-x-1/3 translate-y-1/3"></div>
                
                <div class="relative z-10">
                    <h1 class="text-4xl font-extrabold text-white tracking-tight mb-2 animate-fade-in">
                        Welcome Aboard! 🚀
                    </h1>
                    <p class="text-indigo-100 font-medium text-lg max-w-md mx-auto">
                        Join thousands of creators and start your journey today.
                    </p>
                </div>
                
                <!-- Decorative Wave -->
                <div class="absolute bottom-0 left-0 right-0">
                    <svg class="w-full h-6 text-white/90" preserveAspectRatio="none" viewBox="0 0 1440 74">
                        <path fill="currentColor" d="M456.463 38.113L0 74H1440V0L1098.21 52.196L969.37 41.932L817.885 59.418L638.072 20.629L456.463 38.113Z"/>
                    </svg>
                </div>
            </div>

            <form class="p-8 space-y-6" action="/addUser" method="POST">
            {{-- <form class="p-8 space-y-6" action="{{ route('register') }}" method="POST"> --}}
   
                @csrf

                <div class="space-y-5">
                    <!-- Name - Enhanced -->
                    <div class="space-y-1.5 group">
                        <label for="name" class="text-xs font-bold text-gray-500 uppercase tracking-wider ml-1 flex items-center space-x-1">
                            <svg class="w-3.5 h-3.5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span>Full Name</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-focus-within:text-indigo-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input id="name" name="name" type="text" value="{{ old('name') }}" required
                                class="w-full pl-11 pr-4 py-3.5 bg-gradient-to-r from-gray-50 to-white border-2 border-gray-200 rounded-2xl 
                                       focus:bg-white focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 
                                       transition-all duration-300 placeholder:text-gray-300 font-medium
                                       @error('name') border-red-300 bg-red-50 @enderror"
                                placeholder="Enter your full name">
                        </div>
                        @error('name')
                            <p class="text-xs text-red-500 mt-1.5 ml-1 font-semibold flex items-center space-x-1">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <!-- Email - Enhanced -->
                    <div class="space-y-1.5 group">
                        <label for="email" class="text-xs font-bold text-gray-500 uppercase tracking-wider ml-1 flex items-center space-x-1">
                            <svg class="w-3.5 h-3.5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>Email Address</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-focus-within:text-indigo-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </div>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required
                                class="w-full pl-11 pr-4 py-3.5 bg-gradient-to-r from-gray-50 to-white border-2 border-gray-200 rounded-2xl 
                                       focus:bg-white focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 
                                       transition-all duration-300 placeholder:text-gray-300 font-medium
                                       @error('email') border-red-300 bg-red-50 @enderror"
                                placeholder="you@example.com">
                        </div>
                        @error('email')
                            <p class="text-xs text-red-500 mt-1.5 ml-1 font-semibold flex items-center space-x-1">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <!-- Password Fields - Enhanced -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1.5 group">
                            <label for="password" class="text-xs font-bold text-gray-500 uppercase tracking-wider ml-1 flex items-center space-x-1">
                                <svg class="w-3.5 h-3.5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                                <span>Password</span>
                            </label>
                            <div class="relative">
                                <input id="password" name="password" type="password" required
                                    class="w-full px-4 py-3.5 bg-gradient-to-r from-gray-50 to-white border-2 border-gray-200 rounded-2xl 
                                           focus:bg-white focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 
                                           transition-all duration-300 placeholder:text-gray-300 font-medium
                                           @error('password') border-red-300 bg-red-50 @enderror"
                                    placeholder="••••••••">
                                <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-indigo-600 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>
                            @error('password')
                                <p class="text-xs text-red-500 mt-1.5 ml-1 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="space-y-1.5 group">
                            <label for="password_confirmation" class="text-xs font-bold text-gray-500 uppercase tracking-wider ml-1 flex items-center space-x-1">
                                <svg class="w-3.5 h-3.5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span>Confirm</span>
                            </label>
                            <input id="password_confirmation" name="password_confirmation" type="password" required
                                class="w-full px-4 py-3.5 bg-gradient-to-r from-gray-50 to-white border-2 border-gray-200 rounded-2xl 
                                       focus:bg-white focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 
                                       transition-all duration-300 placeholder:text-gray-300 font-medium"
                                placeholder="••••••••">
                        </div>
                    </div>

                    <!-- Password Strength Indicator (Optional Enhancement) -->
                    <div class="mt-2 p-3 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl">
                        <div class="flex items-center space-x-2 text-xs text-indigo-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Password must be at least 8 characters long</span>
                        </div>
                    </div>
                </div>

                <!-- Terms Checkbox - Enhanced -->
                <label class="flex items-center space-x-3 p-4 bg-gradient-to-r from-gray-50 to-white rounded-2xl border-2 border-gray-100 hover:border-indigo-200 transition-all duration-300 cursor-pointer group">
                    <div class="relative">
                        <input id="terms" name="terms" type="checkbox" required 
                               class="w-5 h-5 text-indigo-600 bg-white border-2 border-gray-300 rounded-lg 
                                      focus:ring-indigo-500 focus:ring-offset-0 
                                      transition-all duration-300 cursor-pointer
                                      checked:bg-indigo-600 checked:border-indigo-600">
                        <svg class="absolute top-0.5 left-0.5 w-4 h-4 text-white pointer-events-none opacity-0 group-has-checked:opacity-100 transition-opacity" 
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <span class="text-sm text-gray-600 font-medium">
                        I accept the 
                        <a href="#" class="text-indigo-600 font-bold hover:text-indigo-700 hover:underline transition-all">
                            Terms & Conditions
                        </a> 
                        and 
                        <a href="#" class="text-indigo-600 font-bold hover:text-indigo-700 hover:underline transition-all">
                            Privacy Policy
                        </a>
                    </span>
                </label>

                <!-- Submit Button - Enhanced -->
                <div class="pt-4">
                    <button type="submit" value="Registration" name="user_reg"
                            class="group relative w-full bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 
                                   text-white font-black py-4 px-6 rounded-2xl 
                                   shadow-xl shadow-indigo-500/30 hover:shadow-2xl hover:shadow-indigo-500/40 
                                   transition-all duration-300 transform hover:-translate-y-1 hover:scale-[1.02] active:translate-y-0 
                                   uppercase tracking-widest text-sm overflow-hidden">
                        <span class="absolute inset-0 bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></span>
                        <span class="relative flex items-center justify-center space-x-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                            <span>Create My Account</span>
                        </span>
                    </button>
                </div>

                <!-- Social Login Options (Optional Enhancement) -->
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-gradient-to-r from-gray-50 to-white text-gray-500">Or continue with</span>
                    </div>
                </div>

                

                <!-- Login Link - Enhanced -->
                <div class="text-center">
                    <p class="text-sm text-gray-500">
                        Already have an account? 
                        <a href="{{ route('login') }}" class="font-bold text-indigo-600 hover:text-indigo-700 hover:underline transition-all">
                            Sign in here
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add these custom animations to your CSS file or in a style tag -->
<style>
    @keyframes blob {
        0% { transform: translate(0px, 0px) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
        100% { transform: translate(0px, 0px) scale(1); }
    }
    
    .animate-blob {
        animation: blob 7s infinite;
    }
    
    .animation-delay-2000 {
        animation-delay: 2s;
    }
    
    .animation-delay-4000 {
        animation-delay: 4s;
    }
    
    @keyframes fade-in {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .animate-fade-in {
        animation: fade-in 0.6s ease-out;
    }
    
    .group:has(:checked) .group-has-checked\:opacity-100 {
        opacity: 1;
    }
</style>
@endsection