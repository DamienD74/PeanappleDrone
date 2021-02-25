<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('Titre')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"  href="{{ asset('css/contact.css')}}">
</head>
<body>

@yield('content')

</body>
<footer>
    @yield('footer')
</footer>
</html>
