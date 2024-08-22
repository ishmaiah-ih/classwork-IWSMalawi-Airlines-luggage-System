@extends('admin.common')

@section('title', 'Dashboard | Cardular')

@section('content')

    <div class="container mt-2">
        <div class="row mb-3">
            <div class="col-md-4 offset-md-8">
                <input type="text" id="search" class="form-control" placeholder="surname or ticket number">
            </div>
        </div>

        <div id="cards-container" class="row">
            @include('admin.cards', ['customers' => $customers])
        </div>
                            

    </div>

    <!-- Include jQuery for AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search').on('input', function() {
                let query = $(this).val();
                $.ajax({
                    url: "{{ route('admin.customer-search') }}",
                    method: "GET",
                    data: { query: query },
                    success: function(data) {
                        $('#cards-container').html(data);
                    }
                });
            });
        });
    </script>

@endsection
