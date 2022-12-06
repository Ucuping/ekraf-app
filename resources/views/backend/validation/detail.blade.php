@extends('backend.layouts.ajax')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('apps.dashboard') }}" data-toggle="ajax">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('apps.validations') }}" data-toggle="ajax">Validasi Ekraf</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            {{ $title }}
        </li>
    </ol>
@endsection
@section('content')
<div class="text-sm-end mb-3 text-center">
    <button class="btn btn-dark btn-sm" type="button" data-toggle="ajax" data-target="{{ route('apps.validations') }}">Kembali</button>
    <button class="btn btn-success btn-sm" type="button" data-toggle="ajax" data-target="" {{ $data->status != 'pending' ? 'disabled' : '' }}><i class="fas fa-check"></i> Verifikasi</button>
    <button class="btn btn-danger btn-sm" type="button" data-toggle="ajax" data-target="" {{ $data->status != 'pending' ? 'disabled' : '' }}><i class="fas fa-times"></i> Tolak</button>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card mt-n4 mx-n4">
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
                        <div class="card">
                            <div class="card-body">
                                <div class="text-muted">
                                    <h6 class="mb-3 fw-semibold text-uppercase">Deskripsi</h6>
                                    <p>{{ $data->description }}</p>

                                    <ul class="ps-4 vstack gap-2">
                                        <li>Product Design, Figma (Software), Prototype</li>
                                        <li>Four Dashboards : Ecommerce, Analytics, Project,etc.</li>
                                        <li>Create calendar, chat and email app pages.</li>
                                        <li>Add authentication pages.</li>
                                        <li>Content listing.</li>
                                    </ul>

                                    <div>
                                        <button type="button" class="btn btn-link link-success p-0">Read more</button>
                                    </div>

                                    <div class="pt-3 border-top border-top-dashed mt-4">
                                        <div class="row">

                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <p class="mb-2 text-uppercase fw-semibold fs-13">Create Date :</p>
                                                    <h5 class="fs-15 mb-0">15 Sep, 2021</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <p class="mb-2 text-uppercase fw-semibold fs-13">Due Date :</p>
                                                    <h5 class="fs-15 mb-0">29 Dec, 2021</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <p class="mb-2 text-uppercase fw-semibold fs-13">Priority :</p>
                                                    <div class="badge bg-danger fs-12">High</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <p class="mb-2 text-uppercase fw-semibold fs-13">Status :</p>
                                                    <div class="badge bg-warning fs-12">Inprogess</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pt-3 border-top border-top-dashed mt-4">
                                        <h6 class="mb-3 fw-semibold text-uppercase">Resources</h6>
                                        <div class="row g-3">
                                            <div class="col-xxl-4 col-lg-6">
                                                <div class="border rounded border-dashed p-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-sm">
                                                                <div
                                                                    class="avatar-title bg-light text-secondary rounded fs-24">
                                                                    <i class="ri-folder-zip-line"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="fs-15 mb-1"><a href="#"
                                                                    class="text-body text-truncate d-block">App
                                                                    pages.zip</a></h5>
                                                            <div>2.2MB</div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <div class="d-flex gap-1">
                                                                <button type="button"
                                                                    class="btn btn-icon text-muted btn-sm fs-18"><i
                                                                        class="ri-download-2-line"></i></button>
                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-icon text-muted btn-sm fs-18 dropdown"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="ri-more-fill"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                Rename</a></li>
                                                                        <li><a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                Delete</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-xxl-4 col-lg-6">
                                                <div class="border rounded border-dashed p-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-sm">
                                                                <div
                                                                    class="avatar-title bg-light text-secondary rounded fs-24">
                                                                    <i class="ri-file-ppt-2-line"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="fs-15 mb-1"><a href="#"
                                                                    class="text-body text-truncate d-block">Velzon
                                                                    admin.ppt</a></h5>
                                                            <div>2.4MB</div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <div class="d-flex gap-1">
                                                                <button type="button"
                                                                    class="btn btn-icon text-muted btn-sm fs-18"><i
                                                                        class="ri-download-2-line"></i></button>
                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-icon text-muted btn-sm fs-18 dropdown"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="ri-more-fill"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                Rename</a></li>
                                                                        <li><a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                Delete</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    {{-- <div class="card mb-3">
        <div class="card-header border-0">
            <div class="text-sm-end text-center">
                <button class="btn btn-dark btn-sm" type="button" data-toggle="ajax" data-target="{{ route('apps.validations') }}">Kembali</button>
                <button class="btn btn-success btn-sm" type="button" data-toggle="ajax" data-target="" {{ $data->status != 'pending' ? 'disabled' : '' }}><i class="fas fa-check"></i> Verifikasi</button>
                <button class="btn btn-danger btn-sm" type="button" data-toggle="ajax" data-target="" {{ $data->status != 'pending' ? 'disabled' : '' }}><i class="fas fa-times"></i> Tolak</button>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-center align-items-center mb-3">
                <div class="me-4" style="width: 60px;height: 60px;border-radius: 50%;">
                    <img src="{{ asset('storage/images/companies/logo/' . $data->logo) }}" width="100%">
                </div>
                <div>
                    <strong>{{ $data->name }}</strong>
                    <p class="mb-0 pb-0 text-muted small">{{ $data->category->name }}</p>
                </div>
            </div>
            <div class="d-flex justify-content-around">
                    <div class="">
                        <table cellpadding="10">
                            <tr>
                                <th>NIK Pemilik</th>
                                <td>{{ $data->owner_identification_number }}</td>
                            </tr>
                            <tr>
                                <th>Nama Pemilik</th>
                                <td>{{ $data->owner_name }}</td>
                            </tr>
                            <tr>
                                <th>Nomor HAKI</th>
                                <td>{{ $data->haki_number ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $data->address }}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>{{ $data->description }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="">
                        <table cellpadding="10">
                            <tr>
                                <th>Facebook</th>
                                <td>{!! $data->facebook_username != null ? '<a href="https://www.facebook.com/{{ $data->facebook_username }}" _blank noopener>Lihat</a>' : '-' !!}</td>
                            </tr>
                            <tr>
                                <th>Instagram</th>
                                <td>{!! $data->instagram_username != null ? '<a href="https://www.instagram.com/{{ $data->instagram_username }}" _blank noopener>Lihat</a>' : '-' !!}</td>
                            </tr>
                            <tr>
                                <th>Twitter</th>
                                <td>{!! $data->twitter_username != null ? '<a href="https://www.twitter.com/{{ $data->twitter_username }}" _blank noopener>Lihat</a>' : '-' !!}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $data->status == 'pending' ? 'Menunggu Verifikasi' : ($data->status == 'approved' ? 'Terverifikasi' : 'Ditolak') }}</td>
                            </tr>
                        </table>
                    </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header border-0">
            <div class="text-sm-middle text-center">
                <h6 class="card-title">Galeri</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @forelse ($data->attachment as $item)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('storage/images/companies/attachment/' . $item->name) }}" width="180px" height="180px" class="card-img-top" alt="...">
                        </div>
                    </div>
                @empty
                    
                @endforelse
            </div>
        </div>
    </div> --}}
@endsection