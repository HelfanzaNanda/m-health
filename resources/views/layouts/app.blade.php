<!doctype html>
<html lang="en">
  @include('layouts._head')
  @stack('styles')
  <body>
    @yield('content')
    @include('layouts._navigation')
    @include('layouts._script')
    @stack('scripts')
  </body>
</html>