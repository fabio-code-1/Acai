<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Açai</title>
  <meta name="description" content="luciAçai- .">
  <meta name="keywords" content="açai, luciAçai">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    @include('layouts.header')
  </header><!-- End Header -->

  <!-- ======= Main ======= -->
  <main id="main">
    @yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    @include('layouts.footer')
  </footer>
  <!-- End Footer -->


</body>

</html>