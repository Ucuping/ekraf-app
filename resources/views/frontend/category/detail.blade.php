@extends('frontend.layouts.base')

@section('content')
{{-- <!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2></h2>
      <p></p>
    </div>
  </div><!-- End Breadcrumbs --> --}}
<section id="about" class="about mt-5">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="{{ asset('assets1/img/foto/' . $data->image) }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>{{ $data->name }}</h3>
          <p class="fst-italic">
            {{ $data->description }}
          </p>
          <ul>
            @forelse ($data->provision as $item)
            <li><i class="bi bi-check-circle"></i>{{ $item->name }}</li>
                
            @empty
                <div>-</div>
            @endforelse
            {{-- <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li> --}}
          </ul>
          {{-- <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          </p> --}}

        </div>
      </div>

    </div>
  </section><!-- End About Section -->
  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{ $data->name }} JEMBER</h2>
        {{-- <p>{{ $data->name }} JEMBER</p> --}}
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

            @forelse ($data->company()->where('status', 'approved')->get() as $item)
            <div class="swiper-slide">
            <div class="testimonial-wrap">
                <div class="testimonial-item">
                <img src="{{ asset('storage/images/companies/logo/' . $item->logo) }}" class="testimonial-img" alt="">
                <h3><a href="{{ route('companies.detail', $item->hashid) }}">{{ $item->name }}</a></h3>
                <h4>Pemilik {{ $item->owner_name }}</h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{ substr($item->description, 0, 50) }}
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                </div>
            </div>
            </div><!-- End testimonial item -->
            @empty
                <div>-</div>
            @endforelse
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->
@endsection