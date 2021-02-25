<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet"  href="{{ asset('css/style.css')}}">
    <link rel="stylesheet"  href="{{ asset('css/home.css')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('style')
</head>
<body>

@include('header')
@yield('content')

<footer>
    @include('footer')
</footer>
</body>
</html>
