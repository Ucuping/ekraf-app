@extends('backend.layouts.ajax')

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('apps.dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
        {{ $title }}
    </li>
    </ol>
@endsection
@section('content')
    <div class="card">
        {{-- <div class="card-header border-0">
            <div class="text-sm-end text-center">
                <button class="btn btn-primary" type="button"><i class="fas fa-plus"></i> Tambah</button>
            </div>
        </div> --}}
        <div class="card-body">
            <div class="table-responsive table-card mb-1">
                <table class="table zero-configuration" data-url="{{ route('apps.roles.getData') }}" width="100%" id="dataTable">
                    <thead>
                        <th>No.</th>
                        <th>Role</th>
                        <th>Guard</th>
                        <th></th>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection