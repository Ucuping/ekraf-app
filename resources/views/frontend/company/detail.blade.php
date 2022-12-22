@extends('frontend.layouts.base')

@section('content')
<section id="events" class="events">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-white mt-n4 mx-n4 mt-5 mb-4">
                    <div class="bg-soft-info">
                        <div class="card-body pb-0 px-4">
                            <div class="row mb-3">
                                <div class="col-md">
                                    <div class="row align-items-center g-3">
                                        <div class="col-md-auto">
                                            <div class="avatar-md">
                                                <div class="avatar-xl avatar me-3 bg-white rounded-circle">
                                                    <img src="{{ asset('storage/images/companies/logo/' . $data->logo) }}" alt=""
                                                        class="avatar-xs">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div>
                                                <h4 class="fw-bold">
                                                    {{ $data->name }}
                                                </h4>
                                                <div class="hstack gap-3 flex-wrap">
                                                    <div><i class="fas fa-store-alt me-1"></i> {{ $data->category->name }}</div>
                                                    <div class="vr"></div>
                                                    <div><i class="fas fa-id-card-alt me-1"></i> {{ $data->haki_number ?? '-' }}</div>
                                                    <div class="vr"></div>
                                                    <div>
                                                        <i class=" fas fa-map-marker-alt me-1"></i> {{ $data->address }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content text-muted">
                    <div class="tab-pane fade show active" id="project-overview" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <div class="text-muted">
                                            <h6 class="mb-3 fw-semibold text-uppercase">Deskripsi</h6>
                                            <p>{{ $data->description }}</p>
        
                                            <ul class="ps-4 vstack gap-2">
                                                {{-- <li>NIK Pemilik : {{ $data->owner_identification_number }}</li> --}}
                                                <li>Nama Pemilik : {{ $data->owner_name }}</li>
                                            </ul>
        
                                            <div class="pt-3 border-top border-top-dashed mt-4">
                                                <div class="row">
        
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div>
                                                            <p class="mb-2 text-uppercase fw-semibold fs-13">Facebook :</p>
                                                            <h6 class="fs-15 mb-0">{!! $data->facebook_username != null ? '<a href="https://www.facebook.com/' . $data->twitter_username . '"' . ' target="_blank" rel="noopener noreferrer">Lihat</a>' : '-' !!}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div>
                                                            <p class="mb-2 text-uppercase fw-semibold fs-13">Instagram :</p>
                                                            <h6 class="fs-15 mb-0">{!! $data->instagram_username != null ? '<a href="https://www.instagram.com/' . $data->instagram_username . '"' . ' target="_blank" rel="noopener noreferrer">Lihat</a>' : '-' !!}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div>
                                                            <p class="mb-2 text-uppercase fw-semibold fs-13">Twitter :</p>
                                                            <h6 class="fs-15 mb-0">{!! $data->twitter_username != null ? '<a href="https://www.twitter.com/' . $data->twitter_username . '"' . ' target="_blank" rel="noopener noreferrer">Lihat</a>' : '-' !!}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://" ></a>
                                            <div class="pt-3 border-top border-top-dashed mt-4">
                                                <h6 class="mb-3 fw-semibold text-uppercase">Galeri</h6>
                                                <div class="row g-3">
                                                    @forelse ($data->attachment as $item)
                                                        <div class="col-xxl-4 col-lg-6">
                                                            <div class="border rounded border-dashed p-2">
                                                                <div class="card h-100">
                                                                    <img src="{{ asset('storage/images/companies/attachment/' . $item->name) }}" width="180px" height="180px" class="card-img-top" alt="...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @empty
                                                        <h6 class="fs-15 mb-0">-</h6>
                                                    @endforelse
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                                <!-- end card -->
                            </div>
                            <!-- ene col -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
</section>
{{-- <div class="card">
    <div class="card-body"> --}}
    {{-- </div>
</div> --}}
@endsection