@extends('frontend.kategori')
@section('title','Kuliner')
@section('content-kuliner')
<div class="container-content">
        <div class="col-9 col-sm-6">
          <img  src="assets1/img/gudeg.png" alt="" />
          <div class="kuliner shadow  ">
            <h4>Kuliner</h4>
          </div>
          <div class="sub-kuliner">
            <p>
              Kuliner adalah istilah yang sering kali dikatakan sebuah olahan makanan atau masakan. 
              Kuliner juga bisa membantu meningkatkan sektor ekonomi kreatif. Salah satunya terdapat
              pada Sub Sektor E-Kraf di Jember. Industri kuliner dengan beragam bisnis kuliner,
              mampu menyumbangkan presentasi besar dalam pertumbuhan dan perkembangan ekonomi.
            </p>
          </div>
          <div class="ketentuan">
            <h4>Ketentuan E-Kraf bidang kuliner: </h4>
            <ol>
              <li>Kreativitas</li>
              <li>Estetika</li>
              <li>Tradisi</li>
              <li>Kearifan Lokal</li>
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
                            <h3 class="fw-bold">USAHA EKRAF KULINER JEMBER</h3>
                        </div>
                </div>
            </div>
            <!-- baris 1 -->
            <div class="row">
              <div class=" col-sm-6 col-md-4 col-lg-2 me-5 mb-3 ms-3">
                <div class="card" style="width: 16rem;height: 11rem;">
                  <img src="assets1/img/gudeg.png" class="card-img-top" alt="...">
                  <div class="card-style">
                    <p class="card-title text-center"><a href="">Gudeg dan Pecel Lumintu Jember
                    </a></p>
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