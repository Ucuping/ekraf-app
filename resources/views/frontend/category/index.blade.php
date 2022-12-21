@extends('frontend.layouts.base')

@section('content')
    <!-- Start subsector Section -->
    <section id="subsector" class="feature-section mt-5">
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
                            <i class="{{ $item->icon }}"></i>
                            <div class="feature-content">
                                <h4>{{ $item->name }}</h4>
                                <p> {{ substr($item->description, 0, 50) }}...</p>
                                <a href="{{ route('categories.detail', $item->hashid) }}" class="btn ">Selengkapnya</a>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                @endforeach
            </div><!-- /.row -->
        
        </div><!-- /.container -->
    </section>
    <!-- End Feature Section -->
@endsection