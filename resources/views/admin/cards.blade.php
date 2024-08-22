






@foreach($customers as $customer)
    <div class="col-12 col-sm-6 col-lg-4 mb-4 card-item">
        <div class="card h-100 border-0 ">
            <div class="card-body text-center">
                <!-- QR Code -->
                <div class="mb-4">
                    <img src="{{ asset($customer->qrcode_path) }}" alt="QR Code" class="img-fluid w-50">
                </div>

                <!-- Customer Full Name and Ticket Number -->
                <p class="text-muted"><span class="text-danger opacity-7">Ticket: </span>{{ $customer->ticket_number }}</p>
                <h2 class="h5 font-weight-bold">{{ $customer->surname }} {{ $customer->first_name }}</h2>
            </div>
        </div>
    </div>
{{--                            {{ $customers->links() }}--}}

@endforeach
