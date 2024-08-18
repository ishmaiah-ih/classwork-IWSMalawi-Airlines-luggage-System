@extends('layout')

@section('title', 'Dashboardpage')

@section('content')
    <div class="w-full min-h-screen flex flex-col justify-center  items-center bg-cover bg-center" style="background-image: url('{{ asset('images/wall.jpg') }}');">
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 bg-opacity-75 p-10 rounded-lg text-center">
            <h1 class="text-5xl font-bold text-white mb-6">Welcome to Our Airline</h1>
            <p class="text-lg text-white mb-8">Your journey begins here. Fly with comfort and style.</p>
            <a href="#" class="px-8 py-3 bg-amber-600 text-white text-lg font-medium rounded-full shadow-lg hover:bg-amber-500 transition duration-300">
                Explore
            </a>
        </div>
    </div>

@endsection
