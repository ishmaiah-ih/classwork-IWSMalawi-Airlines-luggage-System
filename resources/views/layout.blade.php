<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @vite('resources/css/app.css')

    <title>@yield('title', 'Luggage Application')</title>
</head>
<body class="bg-gray-50">
<nav class="bg-blue-600 p-5">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="text-white text-lg font-bold">Luggage Malawi Airline</a>

        <!-- Hamburger Menu Button (hidden on large screens) -->
        <button class="block lg:hidden text-white focus:outline-none" id="navbar-toggle">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Navbar Links -->
        <div class="hidden lg:flex lg:items-center w-full lg:w-auto" id="navbar-menu">
            <ul class="lg:flex lg:space-x-4 text-center lg:text-left">
                @if(Route::is('login'))
                    <li>
                        <a href="{{ route('home') }}" class="text-white block px-4 py-2 font-bold me-4">Home</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('dashboard') }}" class="text-white block px-4 py-2 font-bold">Book</a>
                    </li>
{{--                    <li>--}}
{{--                        <a href="{{ route('luggage.downloadPdf', ['customer' => $customer->id]) }}" class="text-white block px-4 py-2 font-bold">View Luggage</a>--}}
{{--                    </li>--}}
                    <li>
                        <a href="#" class="text-white block px-4 py-2 font-bold">Contact Us</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="text-white block px-4 py-2 font-bold">AdminLogin</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>

    <!-- Centered Links for Small Screens -->
    <div class="lg:hidden hidden flex-col items-center mt-4 space-y-2" id="navbar-links">
        <ul class="text-white text-center space-y-2">
            @if(Route::is('login'))
                <li>
                    <a href="{{ route('home') }}" class="block px-4 py-2 font-bold">Home</a>
                </li>
            @else
                <li>
                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 font-bold">Book</a>
                </li>
{{--                <li>--}}
{{--                    <a href="{{ route('luggage.downloadPdf', ['customer' => $customer->id]) }}" class="block px-4 py-2 font-bold">View Luggage</a>--}}
{{--                </li>--}}
                <li>
                    <a href="#" class="block px-4 py-2 font-bold">Contact Us</a>
                </li>
            @endif
        </ul>
    </div>
</nav>

<div class="">
    @yield('content')
</div>

@include('footer')
</body>
</html>
