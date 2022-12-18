@extends('frontend.layouts.base')

@section('content')
    <!-- Start subsector Section -->
    <section id="subsector" class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h3 class="fw-bold">Sub Sektor</h3>
                            <p>Di Kabupaten Jember terdapat 17 Sub Sektor E-Kraf</p>
                        </div>
                </div>
            </div>
            <!-- baris 1 -->
            <div class="row">
                @foreach ($categories as $item)
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="feature">
                            {{-- <i class="fa fa-briefcase"></i> --}}
                            <div class="feature-content">
                                <h4>{{ $item->name }}</h4>
                                {{-- <p> Startup adalah sebuah usaha yang baru berjalan dan...</p> --}}
                                <a href="{{ route('categories.detail', $item->hashid) }}" class="btn ">Selengkapnya</a>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                @endforeach
            </div><!-- /.row -->
        
        </div><!-- /.container -->
    </section>
    <!-- End Feature Section -->
     <!-- ======= Popular Courses Section ======= -->
  <section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h3 class="fw-bold">Berita Terbaru</h3>
        <p>Berikut adalah berita terbaru seputar Ekonomi Kreatif</p>
      </div>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <img src="{{ asset('assets1/img/berita1.jpeg') }}" class="img-fluid" alt="..."/>
            <div class="course-content">
              <div class="post-details mt-2 mb-4">
                <span class="date"><strong>04 Aug 2022</strong> </span>
              </div>
              <h3><a href="/berita1">Membangun Ekonomi Kreatif Di Desa Jambearum Kecamatan Puger.</a></h3>
                <p>Jambearum  merupakan salah satu dari 12 desa yang ada di Kecamatan Puger. Desa ini memiliki 3 dusun yaitu Dusun Krajan, Dusun Kedung Sumur, dan Dusun Darungan. Masing-masing dusun memiliki potensi UMKM yang berbeda. Dusun Krajan memiliki potensi UMKM yaitu produsen tahu tempe...</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <img style="height: 310px;" src="{{ asset('assets1/img/berita2.jpeg') }}" class="img-fluid" alt="..."/>
            <div class="course-content">
              <div class="post-details mt-2 mb-4">
                <span class="date"><strong>20 Sep 2022 </strong></span>
              </div>
              <h3><a href="/berita2">Pengembangan Ekonomi Kreatif Kota Jember melalui Event JFC </a></h3>
              
                <p>Ekonomi Kreatif adalah sebuah konsep pada era ekonomi baru yang mengintensifkan informasi dan kreativitas dengan mengandalkan ide dan pengetahuan dari sumber daya manusia sebagai faktor produksi yang utama. Konsep ini biasanya akan didukung dengan keberadaan industri...</p>
            </div>
          </div>
        </div>
      
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <img style="height: 310px;" src="{{ asset('assets1/img/berita3.jpeg') }}" class="img-fluid" alt="..."/>
            <div class="course-content">
              <div class="post-details mt-2 mb-4">
                <span class="date"><strong>08 Okt 2022 </strong></span>
              </div>
              <h3><a href="/berita3">Ragam Ekonomi Kreatif di Kabupaten Jember</a></h3>
                <p>Kabupaten Jember merupakan pusat regional di kawasan timur tapal kuda jantan. Kabupaten Jember juga mengembangkan batik yang dijadikan sebagai salah satu identitas dari daerah tersebut. Walaupun batik Jember masih belum memiliki brand yang luas namun batik ini...</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <img style="height: 310px;" src="{{ asset('assets1/img/berita4.jpeg') }}" class="img-fluid" alt="..."/>
            <div class="course-content">
              <div class="post-details mt-2 mb-4">
                <span class="date"><strong>03 Mar 2022 </strong></span>
              </div>
              <h3><a href="/berita4">Bangkitkan Ekonomi Kreatif, DEKRANASDA Jember Ikuti Pameran Di Surabaya</a></h3>
                <p>Upaya membangkitkan ekonomi kreatif terus digencarkan berbagai pihak, salah satunya Dewan Kerajinan Nasional Daerah (Dekranasda) Jawa Timur. Mereka menggelar pameran...</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <img style="height: 310px;" src="{{ asset('assets1/img/berita5.jpeg') }}" class="img-fluid" alt="..."/>
            <div class="course-content">
              <div class="post-details mt-2 mb-4">
                <span class="date"><strong>14 Sep 2022</strong></span>
              </div>
              <h3><a href="/berita5">Dorong Pemulihan Ekonomi Kabupaten Jember melalui Diseminasi Kekayaan Intelektual</a></h3>
                <p>Demi menggali potensi Usaha Mikro Kecil dan Menengah (UMKM), Direktorat Jenderal Kekayaan Intelektual (DJKI) Kementerian Hukum dan Hak Asasi Manusia (Kemenkumham) menggelar Diseminasi...</p>
            </div>
          </div>
        </div>
      </div>
      </div>
      </section>
@endsection