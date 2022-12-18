<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('title') Prokraf Jember</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets1/img/logojember.png" rel="icon" />
  <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets1/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.9.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
          <h1 class="logo me-auto"><a href="/home">PROKRAF JEMBER</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto"><img src="assets1/img/logo.png" alt="" class="img-fluid"></a>-->
  
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a href="/home">Home</a></li>
              <li><a href="trainers.html">Daftar</a></li>
              <li><a href="/auth">Masuk</a></li>
               <li id="dropdown1" class="dropdown d-flex scrollarea">
                <a class="active" href="#"><span>Sub Sektor</span> <i class="bi bi-chevron-down"></i></a>             
                <ul>
                  <li><a href="/startup">Startup</a></li>
                  <li><a href="/arsitektur">Arsitektur</a></li>
                  <li><a href="/interior">Desain Interior</a></li>
                  <li><a href="/musik">Musik</a></li>
                  <li><a href="/seni">Seni Rupa</a></li>
                  <li><a href="/produk">Desain Produk</a></li>
                  <li><a href="/fashion">Fashion</a></li>               
                  <li><a href="/kuliner">Kuliner</a></li>
                  <li><a href="/film">Film</a></li>
                  <li><a href="/animasi">Animasi Video</a></li>
                  <li><a href="/fotografi">Fotografi</a></li>
                  <li><a href="/komunikasi">Komunikasi Visual</a></li>
                  <li><a href="/televisi">Televisi & Radio</a></li>
                  <li><a href="/kriya">Kriya</a></li>
                  <li><a href="/periklanan">Periklanan</a></li>
                  <li><a href="/pertunjukan">Seni & Pertunjukan</a></li>
                  <li><a href="/aplikasi">Aplikasi & Game</a></li>
                </ul>
              </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
          <!-- .navbar -->
        </div>
      </header>


      <!-- CONTENT-KATEGORI -->
        @yield('content-startup')
        <!-- content arsitektur -->
        @yield('content-arsitektur')
        <!-- END arsitektur -->
      
        <!-- content interior -->
        @yield('content-interior')
         <!-- END interior -->
         @yield('content-musik')
         @yield('content-seni')
         @yield('content-produk')
         @yield('content-fashion')
         @yield('content-kuliner')
         @yield('content-film')
         @yield('content-animasi')
         @yield('content-fotografi')
         @yield('content-komunikasi')
         @yield('content-televisi')
         @yield('content-kriya')
         @yield('content-periklanan')
         @yield('content-pertunjukan')
         @yield('content-aplikasi')
         
         @yield('content-berita1')

      <!-- END KATEGORI -->

         <!-- FOOTER -->
    <footer class="style-1 d-flex flex-row p-3">
      <div class="container ">
          <div class="row">
              <div class="col-md-4">
                  <img src="assets1/img/wonderfull.png" alt="">
                  <img src="assets1/img/logojember.png" alt="">
              </div>
              <div class="col-md-4">
                  <h4 class="mt-4 fw-bold"><a href="index.html">www.E-KrafJember.co.id</a></h4>
              </div>
          </div>
      </div>
    </footer>

    <!-- End Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

       <!-- Vendor JS Files -->
    <script src="assets1/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets1/vendor/aos/aos.js"></script>
    <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets1/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets1/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets1/js/main.js"></script>

    <script src="https://kit.fontawesome.com/1042f724b4.js" crossorigin="anonymous"></script>
</body>
</html>