@extends('backend.layouts.auth')

@section('content')
<div id="auth">
  <div class="auth-content d-flex align-items-center h-100">
    <div class="container" style="">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center mt-sm-5 mb-4 logo">
            <div>
              <a href="{{ route('auth') }}">
                <img src="{{ asset('assets/images/logo/logo.png') }}" height="50" alt="Logo"/>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
          <div class="card mt-4">
            <div class="card-body p-4">
              <div class="text-center mt-2">
                <h5 class="text-primary">Selamat Datang</h5>
                <p class="text-muted">Sistem Promosi Ekonomi Kreatif Kab. Jember</p>
              </div>
              <div class="p-2">
                <form action="{{ url('/register') }}" method="POST" data-request="ajax" data-callback="{{ route('auth') }}">
                  <div class="form-group position-relative has-icon-left mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="NIK"
                      name="identity_number"
                    />
                    <div class="form-control-icon">
                      <i class="bi bi-person-badge"></i>
                    </div>
                  </div>
                  <div class="form-group position-relative has-icon-left mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Nama"
                      name="name"
                    />
                    <div class="form-control-icon">
                      <i class="bi bi-person"></i>
                    </div>
                  </div>
                  <div class="form-group position-relative has-icon-left mb-3">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Email"
                      name="email"
                    />
                    <div class="form-control-icon">
                      <i class="bi bi-envelope"></i>
                    </div>
                  </div>
                  <div class="form-group position-relative has-icon-left mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Username"
                      name="username"
                    />
                    <div class="form-control-icon">
                      <i class="bi bi-person"></i>
                    </div>
                  </div>
                  <div class="form-group position-relative has-icon-left mb-3">
                    <input
                      type="password"
                      class="form-control"
                      placeholder="Password"
                      name="password"
                    />
                    <div class="form-control-icon">
                      <i class="bi bi-shield-lock"></i>
                    </div>
                  </div>
                  {{-- <div class="form-group position-relative has-icon-left mb-3">
                    <input
                      type="password"
                      class="form-control"
                      placeholder="Confirm Password"
                    />
                    <div class="form-control-icon">
                      <i class="bi bi-shield-lock"></i>
                    </div>
                  </div> --}}
                  <button class="btn btn-primary btn-block shadow-lg mt-2">
                    Daftar
                  </button>
                </form>
                <div class="text-center mt-3">
                  <p class="text-gray-600">
                    Sudah punya akun?
                    <a href="{{ route('auth') }}" class="font-bold">Masuk</a>.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    {{-- <div class="row h-100">
      <div class="col-lg-5 col-12">
        <div id="auth-left">
          <div class="auth-logo-signup">
            <a href="index.html"
              >
              <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo"
              />
            </a>
          </div>
          <h1 class="auth-title">Daftar</h1>

          <form action="{{ url('/register') }}" method="POST" data-request="ajax" data-callback="{{ route('auth') }}">
            <div class="form-group position-relative has-icon-left mb-4">
              <input
                type="text"
                class="form-control"
                placeholder="NIK"
                name="identity_number"
              />
              <div class="form-control-icon">
                <i class="bi bi-person-badge"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input
                type="text"
                class="form-control"
                placeholder="Nama"
                name="name"
              />
              <div class="form-control-icon">
                <i class="bi bi-person"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input
                type="email"
                class="form-control"
                placeholder="Email"
                name="email"
              />
              <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input
                type="text"
                class="form-control"
                placeholder="Username"
                name="username"
              />
              <div class="form-control-icon">
                <i class="bi bi-person"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input
                type="password"
                class="form-control"
                placeholder="Password"
                name="password"
              />
              <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input
                type="password"
                class="form-control"
                placeholder="Confirm Password"
              />
              <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
              </div>
            </div>
            <button class="btn btn-primary btn-block shadow-lg mt-2">
              Daftar
            </button>
          </form>
          <div class="text-center mt-3">
            <p class="text-gray-600">
              Sudah punya akun?
              <a href="{{ route('auth') }}" class="font-bold">Masuk</a>.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 d-none d-lg-block">
        <img src="{{ asset('assets/images/login-img.svg') }}" alt="" class="mx-auto d-block">
      </div>
    </div> --}}
  </div>
@endsection