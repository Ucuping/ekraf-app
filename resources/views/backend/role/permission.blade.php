@extends('backend.layouts.ajax')

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('apps.dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('apps.roles') }}">Role</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
        {{ $title }}
    </li>
</ol>
@endsection
@section('content')
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form action="{{ route('apps.roles.changePermissions', $role->hashid) }}" method="post" data-request="ajax" data-callback="{{ route('apps.roles') }}">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-12 mb-5">
                            <div class="checkbox d-flex justify-content-center">
                                <div class="form-check form-check-outline form-check-primary">
                                    <input type="checkbox" id="check-all" class="form-check-input">
                                    <label for="check-all" class="form-check-label">Pilih Semua</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row pl-4 pr-4">
                                @foreach ($permissions as $idx => $permission)
                                    @if (getInfoLogin()->roles[0]['name'] == 'Developer')
                                        <div class="col-md-3 col-sm-6" style="margin-bottom: 40px">
                                            @foreach ($permission as $item)
                                                <div class="form-check form-check-outline form-check-primary">
                                                    <input type="checkbox" class="form-check-input check-all" id="check-all-{{ $idx . '-' . $loop->iteration }}" name="permission[]" value="{{ $item->name }}" {{ $role->hasPermissionTo($item->name) ? 'checked' : 'aaa' }}>
                                                    <label for="check-all-{{ $idx . '-' . $loop->iteration }}" class="form-check-label">{{ $item->name }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    @elseif(getInfoLogin()->roles[0]['name'] !== 'Developer' and $permission[0] !== 'change-permissions')
                                        <div class="col-md-3 col-sm-6" style="margin-bottom: 10px">
                                            @foreach ($permission as $item)
                                                <div class="form-check form-check-outline form-check-primary">
                                                    <input class="form-check-input check-all" type="checkbox" id="check-all-{{ $idx . '-' . $loop->iteration }}"  name="permission[]"
                                                    value="{{ $item->name }}"
                                                    {{ $role->hasPermissionTo($item->name) ? 'checked' : '' }}>
                                                    <label for="check-all-{{ $idx . '-' . $loop->iteration }}" class="form-check-label">{{ $item->name }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <hr>
                        <div class="col-12 text-end">
                            <button class="btn btn-light waves-effect waves-light mx-1" type="button" data-toggle="ajax"
                                data-target="{{ route('apps.roles') }}"> Kembali</button>
                            <button class="btn btn-primary me-1 waves-effect waves-float waves-light" type="submit"><i
                                    class="fas fa-paper-plane"></i> Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection