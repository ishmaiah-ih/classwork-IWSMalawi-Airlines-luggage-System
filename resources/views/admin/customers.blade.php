@extends('admin.common')
@section('title', 'customers | Luggage')
@section('content')

    <div class="row">
        <div class="col col-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        User's List
                        <a href="{{route('admin.customer-add')}}" class="btn btn-primary float-end">
                            Add User
                        </a>


                    </h4>

                    <table class="table table-bordered table-striped table-hover">
                        <thead class="text-center">
                        <tr>
{{--                            <th>Id</th>--}}
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
                        <tr>
{{--                            <td>1</td>--}}
                            <td>Ishmael</td>
                            <td>Mwalwanda</td>
                            <td>mwalwandaishmael@gmail.com</td>
                            <td>0991315552</td>
                            <td>Chileka</td>
                            <td>USA</td>

                            <td>
                                <a href="" class="text-primary me-2"><i class="fas fa-eye"></i>
                                </a>
                                <a href="" class="text-success me-2"><i class="fas fa-edit"></i>
                                </a>

                                <a href="" class="text-danger"
                                   onclick="confirm('Are you sure you want to delete this customer?')"
                                ><i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>

    </div>
@endsection
{{--@extends('script')--}}

{{--@include('admin.includes.footer')--}}
