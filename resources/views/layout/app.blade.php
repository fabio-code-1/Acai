<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>arquitetura-ArqAmorim</title>
  <meta name="description" content="ArqAmorim - Arquitetura inovadora e inspiradora. Soluções exclusivas e personalizadas. Projetos criativos, funcionais e sustentáveis. Palavras-chave: arquitetura, inovação, personalização, sustentabilidade.">
  <meta name="keywords" content="arquitetura, arquitetura inovadora, projetos personalizados, sustentabilidade, estilo, transformação de espaços, obras de arte, ambiente criativo, funcional e sustentável, ArqAmorim">

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