@extends('frontend.layouts.base')

@section('content')
<div class="container-content">
    <div class="col-9 col-sm-6">
      <img style="width: 120%;" src="assets1/img/foto/ANIMASI DAN VIDEO.webp" alt="" />
      <div class="kuliner shadow  ">
        <h4>{{ $data->name }}</h4>
      </div>
      <div class="sub-kuliner">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut recusandae soluta cum, consequuntur officiis molestias. Nihil nulla fugit esse a numquam quibusdam laborum molestiae laudantium, ea itaque assumenda suscipit aliquid.
        </p>
      </div>
      <div class="ketentuan">
        <h4>Ketentuan E-Kraf bidang {{ $data->name }}: </h4>
        <ol>
          <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid nesciunt aliquam quam non eligendi asperiores magnam sequi. Aut repudiandae, quam dolorum quod laboriosam in ipsa ex numquam, tempora, provident odit.</li>
          {{-- <li>Editing & Sinematografi</li>
          <li>Dubbbing Film</li>
          <li>Penulisan Skrip</li> --}}
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
                        <h3 class="fw-bold">{{ $data->name }} JEMBER</h3>
                    </div>
            </div>
        </div>
        <!-- baris 1 -->
        <div class="row">
            @forelse ($data->company as $item)
                <div class=" col-sm-6 col-md-4 col-lg-2 me-5 mb-3 ms-3">
                <div class="card" style="width: 16rem;height: 12rem;">
                    <img src="{{ asset('storage/images/companies/logo/' . $item->logo) }}" class="card-img-top" alt="...">
                    <div class="card-style">
                    <p class="card-title text-center"><a href="#">{{ $item->name }}
                    </a></p>
                    </div>
                </div>
                </div>
            @empty
                <div>-</div>
            @endforelse
        </div>
  </div>
  </section>
@endsection