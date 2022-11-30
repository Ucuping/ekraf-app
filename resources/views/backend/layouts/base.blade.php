<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="base-url" content="{{ url('/') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="asset-url" content="{{ asset('/') }}">
    <meta name="user-permissions" content="{{ getUserPermissions() }}">
    <title>{{ $title }} | SIM EKRAF KAB. JEMBER</title>

    <link
    rel="shortcut icon"
    href="{{ asset('assets/images/logo/favicon.svg') }}"
    type="image/x-icon"
    />
    <link
    rel="shortcut icon"
    href="{{ asset('assets/images/logo/favicon.png') }}"
    type="image/png"
    />
    
    <link rel="stylesheet" href="{{ asset('assets/extensions/@fortawesome/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/extensions/choices.js/public/assets/styles/choices.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/extensions/dragula/dragula.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/extensions/filepond/filepond.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/extensions/summernote/summernote.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/extensions/sweetalert2/sweetalert2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/extensions/toastify-js/src/toastify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/extensions/waitme/waitMe.css') }}" />
    
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/error.css') }}" />
  </head>

  <body id="documentLoader">
    {{-- <div class="waitMe_container progress" style="background:#fff">
      <div style="background:#000"></div>
      </div> --}}
    <script src="{{ asset('assets/js/initTheme.js') }}"></script>
      @yield('app')
  </body>
</html>
