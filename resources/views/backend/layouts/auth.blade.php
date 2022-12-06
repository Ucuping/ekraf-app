<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }} | SIM EKRAF KAB. JEMBER</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="base-url" content="{{ url('/') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="asset-url" content="{{ asset('/') }}">
    <meta name="user-permissions" content="{{ getUserPermissions() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}" />
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
    <link rel="stylesheet" href="{{ asset('assets/extensions/toastify-js/src/toastify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/extensions/waitme/waitMe.css') }}" />
  </head>

  <body>
    @yield('content')
    <script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extensions/toastify-js/src/toastify.js') }}"></script>
    <script src="{{ asset('assets/extensions/waitme/waitMe.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
      document.title = "{{ $title . ' | DINAS EKONOMI KREATIF KAB. JEMBER' }}"
  
      if (!window.jQuery) {
          document.body.innerHTML = ""
          window.location.reload()
      }
    </script>
  </body>
</html>
