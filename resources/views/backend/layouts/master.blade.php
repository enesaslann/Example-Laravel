<!doctype html>
<html lang="tr">
  <head>
      @include('backend.layouts.partials.head')
      @yield('css')
  </head>
  <body data-topbar="dark">
 <div id="layout-wrapper">
 	@include('backend.layouts.partials.header')
      @yield('content')

      @include('backend.layouts.partials.footer')
      @yield('js')
  </body>
</html>
