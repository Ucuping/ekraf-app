@extends('backend.layouts.error')

@section('content')
<div class="text-center">
  <img
    class="img-error"
    src="{{ asset('assets/images/samples/error-404.svg') }}"
    alt="Not Found"
  />
  <h1 class="error-title">NOT FOUND</h1>
  <p class="fs-5 text-gray-600">
    The page you are looking not found.
  </p>
  <a href="{{ !is_null(getInfoLogin()) ? route('apps.dashboard') : route('auth') }}" class="btn btn-lg btn-outline-primary mt-3"
    >Go Dashboard</a
  >
</div>
@endsection