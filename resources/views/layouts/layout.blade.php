<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Vincent Luhur - Flowers & Design | @yield('title')</title>

    <link rel="icon" type="image/x-icon" href="assets/img/fav.ico">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">


    @stack('stylesheets')
</head>
<body >

    <!-- Navigation -->
    @include('layouts.navigation')

    <!-- Main view  -->
    @yield('content')

    <!-- Footer -->
    @include('layouts.footer')

	<!-- All Js -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    @stack('scripts')
    <script>
        $(document).ready(function(){
            $('.carousel').carousel({
                interval: 1000 * 2
            });
        })
    </script>
</body>
</html>
