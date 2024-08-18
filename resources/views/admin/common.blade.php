

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>@yield('title', 'Luggage Application')</title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet"/>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet"/>
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
{{--    @vite('resources/css/app.css')--}}


</head>

<body class="g-sidenav-show  bg-gray-100">

<?php //include 'sidebar.php' ?>

@include('admin.includes.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <!----><?php //include 'navbar.php' ?><!---->
    @include('admin.includes.navbar')



    <div class="container-fluid py-4">
        <div class="">
            @yield('content')
        </div>



{{--        footer --}}

@include('admin.includes.footer')
