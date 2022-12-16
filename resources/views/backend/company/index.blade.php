@extends('backend.layouts.ajax')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('apps.dashboard') }}" data-toggle="ajax">Dashboard</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            {{ $title }}
        </li>
    </ol>
@endsection
@section('content')
    @if ($dataCompanyRejected > 0)
        <div class="alert alert-warning">
            <i class="bi bi-exclamation-triangle"></i> Terdapat {{ $dataCompanyRejected }} ekraf yang ditolak, klik icon edit untuk memperbaikinya dan klik icon detail untuk melihat alasannya.
        </div>
    @endif
    <div class="card">
        <div class="card-header border-0">
            <div class="text-sm-end text-center">
                <button class="btn btn-primary" type="button" data-toggle="ajax" data-target="{{ route('apps.companies.create') }}"><i class="fas fa-plus"></i> Tambah</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive table-card mb-1">
                <table class="table zero-configuration" data-url="{{ route('apps.companies.getData') }}" width="100%" id="dataTable">
                    <thead>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Pemilik</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th></th>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    @include('backend.validation.partials.form')
@endsection