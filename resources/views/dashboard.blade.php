@extends('layout')

@section('title', 'Register Luggage')

@section('content')
    <div class="max-w-4xl mx-auto p-6 mt-4 mb-3 bg-white shadow-sm rounded-lg">
        <h1 class="text-2xl font-bold mb-6">Register Your Luggage</h1>

        <form action="{{route('luggage.store')}}" method="POST">
            @csrf

            <!-- Customer Information -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Customer fields -->
                <div class="mb-4">
                    @error('surname') <span class="text-red-600 opacity-7 mb-2 ">{{$message}} </span>@enderror
                    <label for="surname" class="block text-gray-700 font-medium">Surname:</label>
                    <input type="text" name="surname" id="surname" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>

                <div class="mb-4">
                    @error('first_name') <span class="text-red-600 opacity-7 mb-2 ">{{$message}} </span> @enderror
                    <label for="first_name" class="block text-gray-700 font-medium">First Name:</label>
                    <input type="text" name="first_name" id="first_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>

                <div class="mb-4">
                    @error('email') <span class="text-red-600 opacity-7 mb-2 ">{{$message}} </span>@enderror
                    <label for="email" class="block text-gray-700 font-medium">Email Address:</label>
                    <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>

                <div class="mb-4">
                    @error('phone_number') <span class="text-red-600 opacity-7 mb-2 ">{{$message}} </span>@enderror
                    <label for="phone_number" class="block text-gray-700 font-medium">Phone Number:</label>
                    <input type="text" name="phone_number" id="phone_number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>

                <div class="mb-4">
                    @error('ticket_number') <span class="text-red-600 opacity-7 mb-2 ">{{$message}} </span>@enderror
                    <label for="ticket_number" class="block text-gray-700 font-medium">Ticket Number:</label>
                    <input type="text" name="ticket_number" id="ticket_number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>

                <div class="mb-4">
                    @error('departure_point') <span class="text-red-600 opacity-7 mb-2 ">{{$message}} </span>@enderror
                    <label for="departure_point" class="block text-gray-700 font-medium">Departure Point:</label>
                    <input type="text" name="departure_point" id="departure_point" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>

                <div class="mb-4">
                    @error('destination') <span class="text-red-600 opacity-7 mb-2 ">{{$message}} </span> @enderror
                    <label for="destination" class="block text-gray-700 font-medium">Destination:</label>
                    <input type="text" name="destination" id="destination" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
            </div>

            <!-- Luggage Items -->
            <div id="items-container">
                <div class="luggage-item mb-6 p-4 bg-gray-100 rounded-lg">
                    <h2 class="text-xl font-bold mb-4">Luggage Item</h2>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div class="mb-4 col-span-1">
                            <label for="luggage_name_0" class="block text-sm font-medium text-gray-700">Luggage Item Name</label>
                            <input type="text" id="luggage_name_0" name="items[0][luggage_name]" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="mb-4 col-span-1">
                            <label for="char_1_0" class="block text-gray-700 font-medium">Characteristic 1:</label>
                            <input type="text" name="items[0][char_1]" id="char_1_0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <div class="mb-4 col-span-1">
                            <label for="char_2_0" class="block text-gray-700 font-medium">Characteristic 2:</label>
                            <input type="text" name="items[0][char_2]" id="char_2_0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <div class="mb-4 col-span-1">
                            <label for="char_3_0" class="block text-gray-700 font-medium">Characteristic 3:</label>
                            <input type="text" name="items[0][char_3]" id="char_3_0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more items button -->
            <div class="text-center">
                <button type="button" id="add-item" class="px-6 py-2 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-500 transition duration-300">Add Another Item</button>
            </div>

            <!-- Submit -->
            <div class="mt-6 text-center">
                <button type="submit" class="px-8 py-3 bg-green-600 text-white text-lg font-medium rounded-full shadow-lg hover:bg-green-500 transition duration-300">Submit</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('add-item').addEventListener('click', function() {
            const container = document.getElementById('items-container');
            const index = container.children.length;
            const newItem = `
        <div class="luggage-item mb-6 p-4 bg-gray-100 rounded-lg">
            <h2 class="text-xl font-bold mb-4">Luggage Item ${index + 1}</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="mb-4 col-span-1">
                    <label for="luggage_name_${index}" class="block text-sm font-medium text-gray-700">Luggage Item Name</label>
                    <input type="text" id="luggage_name_${index}" name="items[${index}][luggage_name]" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4 col-span-1">
                    <label for="char_1_${index}" class="block text-gray-700 font-medium">Characteristic 1:</label>
                    <input type="text" name="items[${index}][char_1]" id="char_1_${index}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div class="mb-4 col-span-1">
                    <label for="char_2_${index}" class="block text-gray-700 font-medium">Characteristic 2:</label>
                    <input type="text" name="items[${index}][char_2]" id="char_2_${index}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div class="mb-4 col-span-1">
                    <label for="char_3_${index}" class="block text-gray-700 font-medium">Characteristic 3:</label>
                    <input type="text" name="items[${index}][char_3]" id="char_3_${index}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
            </div>
        </div>`;
            container.insertAdjacentHTML('beforeend', newItem);
        });
    </script>
@endsection
