<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Vendor <?php if($segment = Request::segment(0)) { echo "| ";  echo str_replace('_', ' ', ucfirst($segment)); } if($segment = Request::segment(2)) { echo "| ";  echo str_replace('_', ' ', ucfirst($segment)); } if($segment = Request::segment(3)) { echo " | ";  echo str_replace('_', ' ', ucfirst($segment)); } ?></title>

    <link href="{{ asset('public/backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/style.css') }}" rel="stylesheet">
    
    <!-- Custom -->
    @yield('css')

</head>

<body>
    <div id="wrapper">