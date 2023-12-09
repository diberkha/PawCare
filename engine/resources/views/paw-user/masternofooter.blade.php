<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    @stack('aditional-css')
</head>

<body>
    @include('paw-user.partials.navbarhome')
    @yield('content')

    @stack('aditional-js')
</body>

</html>