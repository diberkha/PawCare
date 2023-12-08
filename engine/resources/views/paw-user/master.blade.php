<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    @stack('aditional-css')
</head>

<body>
    @include('paw-user.partials.navbar2')
    @yield('content')
    @include('paw-user.partials.footer2')

    @stack('aditional-js')
</body>

</html>