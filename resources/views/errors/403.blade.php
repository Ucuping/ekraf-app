@extends('backend.layouts.error')

@section('content')
<div class="text-center">
  <img
    class="img-error"
    src="{{ asset('assets/images/samples/error-403.svg') }}"
    alt="Forbidden"
  />
  <h1 class="error-title">Forbidden</h1>
  <p class="fs-5 text-gray-600">
    You are unauthorized to see this page.
  </p>
  <a href="{{ !is_null(getInfoLogin()) ? route('apps.dashboard') : route('auth') }}" class="btn btn-lg btn-outline-primary mt-3"
    >Go Dashboard</a
  >
</div>
@endsection