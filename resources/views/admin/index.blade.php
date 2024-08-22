@extends('admin.common')

@section('title', 'Dashboard | Luggage')

@section('content')
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card card-body p-3">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">All Customers Today</p>
                <h5 class="font-weight-bolder mb-0">
                    {{ $totalCustomersToday }}
                    <br>
                    <span class="text-sm text-muted">Yesterday-Today % Change </span>
                    <span class="text-success text-sm font-weight-bolder">({{ $customerChange }})</span>
                </h5>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-body p-3">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Today Bookings</p>
                <h5 class="font-weight-bolder mb-0">
                    {{ $totalCustomersToday }}
                    <br>
                    <span class="text-sm text-muted">Yesterday-Today % Change </span>
                    <span class="text-success text-sm font-weight-bolder">({{ $customerChange }})</span>
                </h5>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-body p-3">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">All Luggage Items</p>
                <h5 class="font-weight-bolder mb-0">
                    {{ $totalItemsToday }}
                    <br>
                    <span class="text-sm text-muted">Yesterday-Today % Change </span>
                    <span class="text-success text-sm font-weight-bolder">({{ $itemChange }})</span>
                </h5>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-body p-3">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Customers</p>
                <h5 class="font-weight-bolder mb-0">
                    {{ $customers }}
                    <br>
                    <span class="text-sm text-muted">All Customers Since day 0 </span>

                </h5>
            </div>
        </div>
    </div>
@endsection
