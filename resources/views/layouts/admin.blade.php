<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{ asset('admin/css/templatemo-style.css') }}">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body id="reportsPage">
    <div class="" id="home">
        <!-- header -->
        @include('layouts.module-admin.header')

        <!-- content -->
        @yield('content')

        <!-- footer -->
        @include('layouts.module-admin.footer')
    </div>

    <script src="{{ asset('admin/js/jquery-3.3.1.min.js') }}"></script>
    <!-- https://jquery.com/download/ -->
    <script src="{{ asset('admin/js/moment.min.js') }}"></script>
    <!-- https://momentjs.com/ -->
    <script src="{{ asset('admin/js/Chart.min.js') }}"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="{{ asset('admin/js/tooplate-scripts.js') }}"></script>
    @yield('js')
</body>

</html>