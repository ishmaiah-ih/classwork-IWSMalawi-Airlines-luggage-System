@extends('layout')

@section('title', 'Luggage Details')

@section('content')

    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
        <div class="text-center mb-6">
            <h1 class="text-3xl font-extrabold text-gray-800">
                Luggage Details for {{ $customer->first_name }} {{ $customer->surname }}
            </h1>
            @if (session('success'))
                <div class="bg-blue-600 text-white p-2 rounded-md mb-2 mt-2">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div class="bg-gray-50 p-6 rounded-lg shadow-inner mb-8">
            <div class="text-end">
                <a href="{{ route('luggage.downloadPdf', ['customer' => $customer->id]) }}"
                   class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold text-sm rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 ">
                    <i class="fas fa-download mr-2"></i>
                    Download PDF
                </a>
            </div>

            <div class="text-center space-y-4">
                <div class="flex flex-col items-center mt-4">
                    <p class="text-lg font-semibold text-gray-700 mb-2">
                        Generated QR Code:
                    </p>
                    @if ($customer->qrcode_path)
                        <img src="{{ asset($customer->qrcode_path) }}" alt="QR Code"
                             class="w-32 h-32 object-contain border border-gray-300 ">
                    @else
                        <p>No QR Code available.</p>
                    @endif
                </div>
                <p class="text-lg font-semibold text-gray-700">
                    <span class="font-normal">Email:</span>
                    <a href="mailto:{{ $customer->email }}" class="text-blue-500">{{ $customer->email }}</a>
                </p>
                {{--                <p class="text-lg font-semibold text-gray-700">--}}
                {{--                    <span class="font-normal">Phone Number:</span> {{ $customer->phone_number }}--}}
                {{--                </p>--}}
                {{--                <p class="text-lg font-semibold text-gray-700">--}}
                {{--                    <span class="font-normal">Ticket Number:</span> {{ $customer->ticket_number }}--}}
                {{--                </p>--}}
                {{--                <p class="text-lg font-semibold text-gray-700">--}}
                {{--                    <span class="font-normal">Departure Point:</span> {{ $customer->departure_point }}--}}
                {{--                </p>--}}
                {{--                <p class="text-lg font-semibold text-gray-700">--}}
                {{--                    <span class="font-normal">Destination:</span> {{ $customer->destination }}--}}
                {{--                </p>--}}
            </div>
        </div>

        {{--        <div class="text-center mb-6">--}}
        {{--            <h2 class="text-2xl font-semibold text-gray-800">--}}
        {{--                Luggage Items--}}
        {{--            </h2>--}}
        {{--        </div>--}}

        {{--        <div class="overflow-x-auto">--}}
        {{--            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">--}}
        {{--                <thead>--}}
        {{--                <tr class="bg-gray-100 border-b">--}}
        {{--                    <th class="px-4 py-2 text-left text-gray-600">Luggage Name</th>--}}
        {{--                    <th class="px-4 py-2 text-left text-gray-600">Characteristic 1</th>--}}
        {{--                    <th class="px-4 py-2 text-left text-gray-600">Characteristic 2</th>--}}
        {{--                    <th class="px-4 py-2 text-left text-gray-600">Characteristic 3</th>--}}
        {{--                </tr>--}}
        {{--                </thead>--}}
        {{--                <tbody>--}}
        {{--                @foreach ($luggageItems as $item)--}}
        {{--                    <tr class="border-b hover:bg-gray-50">--}}
        {{--                        <td class="px-4 py-2">{{ $item->luggage_name }}</td>--}}
        {{--                        <td class="px-4 py-2">{{ $item->char_1 }}</td>--}}
        {{--                        <td class="px-4 py-2">{{ $item->char_2 }}</td>--}}
        {{--                        <td class="px-4 py-2">{{ $item->char_3 }}</td>--}}
        {{--                    </tr>--}}
        {{--                @endforeach--}}
        {{--                </tbody>--}}
        {{--            </table>--}}
        {{--        </div>--}}

    </div>

@endsection
