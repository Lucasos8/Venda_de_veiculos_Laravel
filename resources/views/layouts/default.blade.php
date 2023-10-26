<!DOCTYPE html>
<html lang="pt_br">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    @yield('content')

    @include('includes.footer')

    @yield('pagespecificscripts')
</body>


</html>