@extends('layout')
@section('title', 'login')
@section('content')
    <div class="max-w-md mx-auto p-6 bg-white shadow-sm rounded-lg mb-6 mt-6">
        <h2 class="text-2xl font-bold mb-6 text-center">Admin Login</h2>

        <form action="{{ route('login') }}" method="POST" >
            @csrf
            <div class="mb-4">
                @error('email')
                <span class="bg-blue-400 p-2 rounded-sm text-white text-sm mt-2 block ">{{ $message }}</span>
                @enderror

                <label for="email" class="block text-gray-700 font-medium">Email:</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" >
            </div>

            <div class="mb-4">
                @error('password')
                <span class="bg-blue-400 p-2 rounded-sm text-white text-sm mt-2 block">{{ $message }}</span>
                @enderror

                <label for="password" class="block text-gray-700 font-medium">Password:</label>
                <input type="password" name="password" id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" >
            </div>

            <div class="mb-4 flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="text-gray-700">Remember Me</label>
            </div>

            <div class="mt-6 text-center">
                <button type="submit" class="px-8 w-full py-2 mt-5 bg-blue-600 text-white text-lg font-medium  shadow-sm hover:bg-blue-500 rounded-sm  transition duration-300">Login</button>
            </div>
        </form>
    </div>
@endsection
