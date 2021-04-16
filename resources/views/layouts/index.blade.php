<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}

    <!-- META  -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{env('APP_NAME')}}</title>
    
    <meta name="description" content="BusinessPerfect - Freebie HTML/CSS template based on Bootstrap">
    <meta name="author" content="Milan Savov">
    <meta name="keywords" content="html, css, twitter bootstrap, javascript, jquery, responsive">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">

    <!-- STYLESHEETS -->

    <!-- CSS -->
    {{-- <link rel="stylesheet" href={{asset('css/app.css')}}> --}}
    <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" href={{asset('css/responsive.css')}}>
    <link rel="stylesheet" href={{asset('css/colors.css')}}>
    {{-- <link rel="stylesheet" href={{asset('vendor/bootstrap/css/bootstrap.min.css')}}> --}}
</head>
<body>
    @yield('content')
    @include('partial.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src={{asset('public/js/bootstrap.min.js')}} type="module"></script>
    <script src={{asset('public/js/jquery.slicknav.min.js')}}></script>
    <script src={{asset('public/js/slick.min.js')}}></script>
    <script src={{asset('public/js/touchswipe.min.js')}}></script>
    <script src={{asset('public/js/skrollr.min.js')}}></script>
    <script src={{asset('public/js/jquery.countTo.min.js')}}></script>
    <script src={{asset('public/js/script.js')}}></script>

    {{-- <script src={{asset('public/js/app.js')}}></script>
    <script src={{asset('public/js/jquery.shuffle.min.js')}}></script>
    <script src={{asset('public/js/jquery.countTo.min.js')}}></script>
    <script src={{asset('public/js/script.js')}}></script>
    <script src={{asset('vendor/jquery/jquery.min.js')}}></script>
    <script src={{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script> --}}
</body>
</html>