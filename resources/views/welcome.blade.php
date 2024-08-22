@extends('layout')

@section('title', 'Home-page')

@section('content')
    <div class="w-full min-h-screen flex flex-col justify-center items-center bg-cover bg-center animate-fade-in" style="background-image: url('{{ asset('images/wall.jpg') }}');">
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 bg-opacity-75 p-10 rounded-lg text-center animate-slide-up">
            <h1 class="text-5xl font-bold text-white mb-6 transition transform duration-1000 hover:scale-105">
                Welcome to Our Airline
            </h1>
            <p class="text-lg text-white mb-8 transition transform duration-1000 hover:translate-x-1">
                Your journey begins here. Fly with comfort and style.
            </p>
            <a href="{{route('dashboard')}}" class="px-8 py-3 bg-amber-600 text-white text-lg font-medium rounded-full shadow-lg hover:bg-amber-500 transition transform duration-300 hover:scale-110">
              Get started
            </a>
        </div>
    </div>

    <style>
        /* Custom animations */
        @keyframes fade-in {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slide-up {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .animate-fade-in {
            animation: fade-in 2s ease-in-out forwards;
        }

        .animate-slide-up {
            animation: slide-up 1.5s ease-in-out forwards;
        }
    </style>
@endsection
