<!doctype html>
<html lang="en">
  @include('layouts._head')
  @stack('styles')
  <body>
    @yield('content')
    @include('layouts._navigation_pregnant_mother')
    @include('layouts._script')
    @stack('scripts')
  </body>
</html>