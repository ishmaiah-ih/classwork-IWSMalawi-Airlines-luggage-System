@extends('admin.common')
@section('title', 'customers | Luggage')
@section('content')

    <div class="row">
        <div class="col col-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Add User
                        <a href="{{route('admin.customers')}}" class="btn btn-danger float-end">
                            Back
                        </a>
                    </h4>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="email">
                                    </div>
                                </div>

                                <div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone No.</label>
                                        <input type="text" name="phone" class="form-control" id="phone">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Select Role</label>
                                            <select name="role" class="form-select" id="role">
                                                <option value="">Select Role</option>
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr class="text-danger">
                                    <div class="col-md-12 text-end ">
                                        <button type="submit" name="save-user" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
{{--@extends('script')--}}

{{--@include('admin.includes.footer')--}}
