@extends('frontend.kategori')
@section('title','Film')
@section('content-film')
<div class="container-content">
        <div class="col-9 col-sm-6">
          <img style="width: 120%;"  src="assets1/img/foto/FILM.webp" alt="" />
          <div class="kuliner shadow  ">
            <h4>Film</h4>
          </div>
          <div class="sub-kuliner">
            <p>
            Film adalah salah satu industri kreatif berupa tontonan yang punya peran menghibur, itu adalah fungsi yang paling konkret dan mudah. Sebenarnya, film bukan hanya berfungsi sebagai tontonan atau hiburan, ia memiliki banyak fungsi yang lain. Film sebagai teknologi layar kini bisa digunakan untuk komunikasi sosial, iklan, kampanye politik, seminar akademis, dan aktifitas pendidikan. Sekarang film sudah menjadi bahasa komunikasi yang umum. 
            </p>
          </div>
          <div class="ketentuan">
            <h4>Ketentuan E-Kraf bidang Film: </h4>
            <ol>
              <li>Hiburan</li>
              <li>Tontonan</li>
              <li>Komunikasi</li>
              <li>Film Pendek</li>
            </ol>
          </div>
        </div>
      </div>

      <!-- Yang sudah ada -->
      <section id="kuliner-ada" class="kuliner-ready">
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-9 col-sm-6 col-lg-12">
                    <div class="section-title">
                            <h3 class="fw-bold">FILM JEMBER</h3>
                        </div>
                </div>
            </div>
            <!-- baris 1 -->
            <div class="row">
              <div class=" col-sm-6 col-md-4 col-lg-2 me-5 mb-3 ms-3">
                <div class="card" style="width: 16rem;height: 11rem;">
                  <img src="assets1/img/foto/Film 1.jpg" class="card-img-top" alt="...">
                  <div class="card-style">
                    <h5 class="card-title text-center"><a href="">Jasa Film Pendek <br> Jember
                    </a></h5>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-2 me-5 mb-3 ms-3">
                <div class="card" style="width: 16rem;height: 11rem;">
                  <img src="assets1/img/dadar.png" class="card-img-top" alt="...">
                  <div class="card-style">
                    <p class="card-title text-center"><a href="">Dadar Gulung Coklat</a></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-2 me-5 mb-3 ms-3">
                <div class="card" style="width: 16rem;height: 11rem;">
                  <img src="assets1/img/kue.png" class="card-img-top" alt="...">
                  <div class="card-style">
                    <p class="card-title text-center"><a href="">Kue Batik Coklat</a></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-2 me-5 mb-3 ms-3">
                <div class="card" style="width: 16rem;height: 11rem;">
                  <img src="assets1/img/soto.png" class="card-img-top" alt="...">
                  <div class="card-style">
                    <h5 class="card-title text-center"><a href="">Soto Ayam Dahlok <br> Jember</a></h5>
                  </div>
                </div>
              </div>
            </div>
      </div>
      </section>
@endsection