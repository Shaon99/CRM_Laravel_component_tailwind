@extends('auth.master')

@section('content')
    <div class="min-h-screen bg-[#8A3FFC] flex items-center justify-center p-4">
        <div class="w-full max-w-md space-y-8">
            <div class="text-center">
                <h1 class="text-2xl font-semibold text-white">
                    Spider
                    <span class="block -mt-1 text-lg font-normal">Access</span>
                </h1>
            </div>

            <form class="space-y-6" action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="space-y-2">
                    <label htmlFor="email" class="block text-sm text-white">
                        Email
                    </label>
                    <input id="email" type="text" name="email" required
                        class="w-full px-4 py-3 text-gray-900 placeholder-gray-400 bg-white rounded-lg focus:outline-none"
                        placeholder="Enter email or user ID" />
                    @error('email')
                        <span class="text-gray-700">{{ $message }}</span>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label htmlFor="password" class="block text-sm text-white">
                        Password
                    </label>
                    <input id="password" name="password" type="password" required
                        class="w-full px-4 py-3 text-gray-900 placeholder-gray-400 bg-white rounded-lg focus:outline-none"
                        placeholder="Enter Password" />
                    @error('password')
                        <span class="text-gray-700">{{ $message }}</span>
                    @enderror
                    <div class="text-right">
                        <a href="#" class="text-sm text-white/70 hover:text-white">
                            Forgot Password
                        </a>
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-white text-[#8A3FFC] rounded-lg px-4 py-3 font-medium flex items-center justify-center gap-2 hover:bg-white/90 transition-colors">
                    <x-heroicon-o-arrow-right-end-on-rectangle class="w-4 h-4 text-gray-500" />
                    Log In
                </button>
            </form>
        </div>
    </div>
@endsection
