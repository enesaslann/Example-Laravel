<!doctype html>
<html lang="tr">

<head>
        @include('frontend.layouts.partials.head')
        @yield('css')

</head>

<body >
        @include('frontend.layouts.partials.navbar')
        @yield('content')

        @include('frontend.layouts.partials.footer')
        @yield('js')

</body>

</html>