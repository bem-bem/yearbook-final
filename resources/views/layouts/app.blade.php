<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="cctc web base yearbook" />
    <meta name="author" content="Dionmar Lariosa" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
</head>
<body>
  
    @yield('contents')
    @include('sweetalert::alert')
  <script src="{{ asset('js/bootstrap.bundle.js') }}" defer></script>
  <script src="{{ asset('js/sb-admin.js') }}" defer></script>
  <script src="{{ asset('js/my.js') }}" defer></script>
  
</body>
</html>