@extends('admin.common')
@section('title', 'customers | Luggage')
@section('content')

    <div class="row">
        <div class="col col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>
                        Customer's List
                    </h4>
                    <a href="{{route('admin.customer-add')}}" class="btn btn-primary">
                        Add customer
                    </a>


                </div>
                @if (session('success'))
                    <div class="alert bg-gray-200 mx-3 text-white p-2 rounded-md mb-2 mt-2">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-body p-0">
                    <table class="table table-bordered table-striped table-hover mb-0">
                        <thead class="text-center">
                        <tr>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Dp-PT</th>
                            <th>Dest</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->first_name }}</td>
                                <td>{{ $customer->surname }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->phone_number }}</td>
                                <td>{{ $customer->departure_point }}</td>
                                <td>{{ $customer->destination }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{route('admin.customer.show', $customer->id)}}" class="text-primary me-1 btn btn-primary text-white">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <form action="{{ route('admin.customer-delete', $customer->id) }}" method="POST" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger ml-2" onclick="return confirm('Are you sure you want to delete this customer?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- Pagination Links -->
                    <div class="d-flex justify-content-center mt-4">
                        {{ $customers->links() }}



{{--                        {{ $customers->links('pagination::bootstrap-4') }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
