<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('navbar')
<div class="container">
        @yield('content')
</div>
    @include('footer')
</body>
</html>
