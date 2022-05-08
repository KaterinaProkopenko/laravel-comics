<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;1,300;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Font-Awesome cdn v6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>@yield('title')</title>

    @yield('head-scripts')

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
    @include('partials.header')

    <main>
        @yield('main-content')
        @yield('main-content-bottom')
    </main>

    @include('partials.footer')

    @yield('footer-scripts')
</body>
</html>