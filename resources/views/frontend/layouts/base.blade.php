<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>{{ $title }} | Prokraf Jember</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset ('assets1/img/logojember.png') }}" rel="icon" />
    <link href="{{ asset('assets1/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets1/vendor/animate.css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets1/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link
      href="{{ asset('assets1/vendor/bootstrap/css/bootstrap.min.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('assets1/vendor/bootstrap-icons/bootstrap-icons.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('assets1/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets1/vendor/remixicon/remixicon.css" rel="stylesheet') }}" />
    <link href="{{ asset('assets1/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets1/css/style.css') }}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Mentor - v4.9.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="{{ route('home') }}">PROKRAF JEMBER</a></h1>
        <!-- <a href="index.html" class="logo me-auto"><img src="assets1/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('categories') }}">Sub Sektor</a></li>
            {{-- <li><a href="{{ route('announcements') }}">Berita</a></li> --}}
            <li><a href="{{ route('auth.register') }}">Daftar</a></li>
            <li><a href="{{ route('auth') }}">Masuk</a></li>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </header>
    <!-- End Header -->

      <!-- <div id="main-slide" class="carousel slide" data-ride="carousel">
        
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
        <div class="item active">
         
            <h1>Belajar Ekraf yang Asik<br />Bersama Kami</h1>
            <h2>Website ini didedikasikan untuk pelaku ekraf untuk</h2>
            <h2>
              Website ini didedikasikan untuk pelaku ekraf untuk menambah wawasan
              dalam mengembangkan usahanya
            </h2>
            <a href="courses.html" class="btn-get-started">Read More</a>
          </div>
        

        <div class="item">
          <div class="col-md-12 text-center">
              <h1 class="animated2">
                  <span>Daftarkan E-Kraf mu <strong>Sekarang</strong></span>
              </h1>
              <p class="animated1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br> cum quis temporibus, alias at nobis non?</p>	 
          </div>
      </div>
      </div>
      </div>
  
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div> -->
    <!-- End Hero -->
      <main id="main">
          @yield('content')
      </main>
      <!-- End berita Section -->
    <!-- FOOTER -->
    <footer class="style-1 d-flex flex-row p-3">
      <div class="container ">
          <div class="row">
              <div class="col-md-4">
                  <img src="{{ asset('assets1/img/wonderfull.png') }}" alt="">
                  <img src="{{ asset('assets1/img/logojember.png') }}" alt="">
              </div>
              <div class="col-md-4">
                  <h4 class="mt-4 fw-bold"><a href="{{ route('home') }}">www.E-KrafJember.co.id</a></h4>
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
    <script src="{{ asset('assets1/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets1/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets1/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets1/js/main.js') }}"></script>

    <script
      src="https://kit.fontawesome.com/1042f724b4.js"
      crossorigin="anonymous"
    ></script>


    
  </body>
</html>
