<!doctype html>
<html lang="en">
@include('partials._head')
  <body>
  <div class="container">
        @yield('nav')
  </div>
    <div class="container">
    @include('partials._message')
        @yield('content')
    </div>
    <div class="container"> 
      @include('partials._footer')
</div>
    @include('partials._javascript')
    @yield('scripts')
  </body>
</html>