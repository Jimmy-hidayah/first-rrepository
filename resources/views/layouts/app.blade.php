<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('dashboard/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dashboard/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/vector-map/jqvmap.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Admin Dashboard</title>
</head>

<body>

    <div class="dashboard-main-wrapper">

        @include('layouts.nav')
        @include('layouts.sidebar')
        <div class="container-fluid  dashboard-content">
        @yield('content')
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 js-->
    <script src="{{asset('dashboard/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstrap bundle js-->
    <script src="{{asset('dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js-->
    <script src="{{asset('dashboard/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- chartjs js-->
    <script src="{{asset('dashboard/assets/vendor/charts/charts-bundle/Chart.bundle.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/charts/charts-bundle/chartjs.js')}}"></script>

    <!-- main js-->
    <script src="{{asset('dashboard/assets/libs/js/main-js.js')}}"></script>
    <!-- jvactormap js-->
    <script src="{{asset('dashboard/assets/vendor/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- sparkline js-->
    <script src="{{asset('dashboard/assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/charts/sparkline/spark-js.js')}}"></script>
     <!-- dashboard sales js-->
    <script src="{{asset('dashboard/assets/libs/js/dashboard-sales.js')}}"></script>
</body>

</html>
