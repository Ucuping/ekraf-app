@extends('backend.layouts.auth')
@section('content')
<div id="auth" class="auth intro-y">
    <div class="auth-content d-flex align-items-center vh-100">
      <div class="container">
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
                  <h5 class="" style="color: #6691e7">Selamat Datang</h5>
                  <p class="text-muted">Sistem Promosi Ekonomi Kreatif Kab. Jember</p>
                </div>
                <div class="p-2">
                  <form action="{{ url('/login') }}" method="POST" data-request="ajax" data-callback="{{ route('apps.dashboard') }}">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Username" name="username" id="username" autocomplete="off"
                      />
                      <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                      </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                      <input
                        type="password"
                        class="form-control"
                        placeholder="Password" name="password"
                      />
                      <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                      </div>
                    </div>
                    <button class="btn btn-block shadow-lg mt-2 text-white" style="background-color: #6691e7" type="submit">
                      Masuk
                    </button>
                  </form>
                  <div class="text-center mt-3">
                    <p class="text-gray-600">
                      Tidak punya akun?
                      <a href="{{ route('auth.register') }}" class="font-bold" style="color: #6691e7">Daftar</a>.
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
          <div class="auth-logo-login">
            <a href="javascript:void(0)"
              >
              <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo"
            />
          </a>
          </div>
          <h1 class="auth-title">Masuk</h1>
          <p class="auth-subtitle mb-5">
            Log in with your data that you entered during registration.
          </p>

          <form action="{{ url('/login') }}" method="POST" data-request="ajax" data-callback="{{ route('apps.dashboard') }}">
            @csrf
            <div class="form-group position-relative has-icon-left mb-4">
              <input
                type="text"
                class="form-control"
                placeholder="Username" name="username" id="username" autocomplete="off"
              />
              <div class="form-control-icon">
                <i class="bi bi-person"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input
                type="password"
                class="form-control"
                placeholder="Password" name="password"
              />
              <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
              </div>
            </div>
            <button class="btn btn-primary btn-block shadow-lg mt-2" type="submit">
              Masuk
            </button>
          </form>
          <div class="text-center mt-3">
            <p class="text-gray-600">
              Tidak punya akun?
              <a href="{{ route('auth.register') }}" class="font-bold">Daftar</a>.
            </p>
            <p>
              <a class="font-bold" href="auth-forgot-password.html"
                >Forgot password?</a
              >.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 d-none d-lg-block">
        <img src="{{ asset('assets/images/login-img.svg') }}" alt="" class="mx-auto d-block">
        <div id="auth-right">
        </div>
      </div>
    </div> --}}
</div>
    
@endsection