<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="cctc web base yearbook" />
    <meta name="author" content="Dionmar Lariosa" />
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('image/cctc_logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">

</head>
<body id="font_poppins">
    @include('pages.layout.includes.navbar')

      @yield('contents')
    
    @include('layouts.includes._footer')
  <script src="{{ asset('js/bootstrap.bundle.js') }}" defer></script>
  <script src="{{ asset('js/my.js') }}" defer></script>

</body>
</html>