<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @stack('aditional-css')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        @yield('preloader')
        @include('paw-admin.partials.navbar')
        @include('paw-admin.partials.aside')
        @yield('content')
        @include('paw-admin.partials.footer')
    </div>    

    @stack('aditional-js')
</body>
</html>