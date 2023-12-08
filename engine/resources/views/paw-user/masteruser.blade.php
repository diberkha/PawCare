<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    @stack('aditional-css')
</head>

<body>
    @include('paw-user.partials.header')
    @include('paw-user.partials.navbar')
    @yield('content')
    @include('paw-user.partials.footer')
    @include('paw-user.partials.preloader')

    @stack('aditional-js')
</body>

</html>