@extends('backend.layouts.ajax')

@section('breadcrumb')
    {{-- <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
            {{ $title }}
        </li>
    </ol> --}}
@endsection

@section('content')
    <div class="card">
        {{-- <div class="card-header border-0">
            <div class="text-sm-end text-center">
                <button class="btn btn-primary" type="button" data-toggle="ajax" data-target="{{ route('apps.users.create') }}"><i class="fas fa-plus"></i> Tambah</button>
            </div>
        </div> --}}
        <div class="card-body">
            <div class="card-responsive table-card mb-1">
                <div id="dashboard-company">
                    <div class="row h-100">
                      <div class="col-lg-6 col-12">
                        <div id="dashboard-company-left">
                          <h2 class="dashboard-company-title">Selamat Datang</h2>
                          <p class="dashboard-company-subtitle">
                            Silahkan lakukan promosi ekraf yang anda miliki dengan cepat dan efisien, dengan mengklik tombol Daftar di bawa ini!
                          </p>
                          <button class="btn btn-primary btn-block shadow-lg mt-2" type="button" data-toggle="ajax" data-target="{{ route('apps.companies.create', ['dashboard' => true]) }}">
                            Daftar
                          </button>
                        </div>
                      </div>
                      <div class="col-lg-6 d-none d-lg-block">
                        <img src="{{ asset('assets/images/login-img.svg') }}" alt="" class="img-fluid">
                        {{-- <div id="auth-right">
                        </div> --}}
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    @include('backend.validation.partials.form')
@endsection