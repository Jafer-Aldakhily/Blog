<!DOCTYPE html>
<html lang="en">

<head>
@include('user.layout.head')
</head>

<body>

  @include('user.layout.header')

  @yield('content')

  @include('user.layout.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('user/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('user/js/clean-blog.min.js') }}"></script>

  <script src="{{ asset('user/js/prism.js') }}"></script>

</body>

</html>
