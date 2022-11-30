<div id="auth">
    <div class="row h-100">
      <div class="col-lg-5 col-12">
        <div id="auth-left">
          <div class="auth-logo">
            <a href="javascript:void(0)"
              ><img src="{{ asset('assets/images/logo/logo.svg') }}" alt="Logo"
            /></a>
          </div>
          <h1 class="auth-title">Log in.</h1>
          <p class="auth-subtitle mb-5">
            Log in with your data that you entered during registration.
          </p>

          <form action="{{ url('/login') }}" method="POST" data-request="ajax" data-callback="{{ route('dashboard') }}">
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
            <div class="form-check d-flex align-items-end">
              <input
                class="form-check-input me-2"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
              <label
                class="form-check-label text-gray-600"
                for="flexCheckDefault"
              >
                Keep me logged in
              </label>
            </div>
            <button class="btn btn-primary btn-block shadow-lg mt-5" type="submit">
              Log in
            </button>
          </form>
          {{-- <div class="text-center mt-5 fs-4">
            <p class="text-gray-600">
              Don't have an account?
              <a href="auth-register.html" class="font-bold">Sign up</a>.
            </p>
            <p>
              <a class="font-bold" href="auth-forgot-password.html"
                >Forgot password?</a
              >.
            </p>
          </div> --}}
        </div>
      </div>
      <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right"></div>
      </div>
    </div>
  </div>

  <script>
    document.title = "{{ $title . ' | DINAS EKONOMI KREATIF KAB. JEMBER' }}"

    if (!window.jQuery) {
        document.body.innerHTML = ""
        window.location.reload()
    }
  </script>