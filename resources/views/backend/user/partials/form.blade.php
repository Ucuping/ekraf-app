@extends('backend.layouts.ajax')

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('apps.dashboard') }}" data-toggle="ajax">Dashboard</a>
    </li>
    <li class="breadcrumb-item" aria-current="page">
        <a href="{{ route('apps.users') }}" data-toggle="ajax">User</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
        {{ $title }}
    </li>
</ol>
@endsection
@section('content')
    <div class="card intro-y">
        <div class="card-body">
            <form action="{{ $action }}" method="post" data-request="ajax" enctype="multipart/form-data" data-callback="{{ route('apps.users') }}">
                {{-- <div class="mb-3"> --}}
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12 mb-3">
                            <label for="identity_number" class="form-label">NIK <i class="text-danger">*</i></label>
                            <input type="text" id="identity_number" name="identity_number" placeholder="NIK" autocomplete="off" value="{{ isset($data) ? $data->identity_number : '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-6 col-12 mb-3">
                            <label for="name" class="form-label">Nama <i class="text-danger">*</i></label>
                            <input type="text" id="name" name="name" placeholder="Nama" autocomplete="off" value="{{ isset($data) ? $data->name : '' }}" class="form-control">
                        </div>
                    </div>
                {{-- </div> --}}
                {{-- <div class="mb-3"> --}}
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12 mb-3">
                            <label for="username" class="form-label">Username <i class="text-danger">*</i></label>
                            <input type="text" id="username" name="username" placeholder="Username" autocomplete="off" value="{{ isset($data) ? $data->username : '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-6 col-12 mb-3">
                            <label for="email" class="form-label">Email <i class="text-danger">*</i></label>
                            <input type="text" id="email" name="email" placeholder="Email" autocomplete="off" value="{{ isset($data) ? $data->email : '' }}" class="form-control">
                        </div>
                    </div>
                {{-- </div> --}}
                {{-- <div class="mb-3"> --}}
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12 mb-3">
                            <label for="password" class="form-label">Password <i class="text-danger">*</i></label>
                            <input type="password" id="password" name="password" placeholder="Password" autocomplete="off" {{ isset($data) ? 'disabled' : '' }} class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-6 col-12 mb-3">
                            <label for="confirm_password" class="form-label">Konfirmasi Password <i class="text-danger">*</i></label>
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="Konfirmasi Password" autocomplete="off" {{ isset($data) ? 'disabled' : '' }} class="form-control">
                        </div>
                    </div>
                {{-- </div> --}}
                {{-- <div class="mb-3"> --}}
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12 mb-3">
                            <label for="role" class="form-label">Role <i class="text-danger">*</i></label>
                            <select name="role" id="role" class="form-control js-choices">
                                <option value="">Pilih Role</option>
                                @foreach ($roles as $item)
                                    <option value="{{ $item->name }}" {{ (isset($data) and $data->roles[0]->name == $item->name) ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12 mb-3">
                            <label for="is_active" class="form-label">Status <i class="text-danger">*</i></label>
                            <select name="is_active" id="is_active" class="form-control js-choices">
                                <option value="">Pilih Status</option>
                                <option value="1" {{ ($data->is_active == true and isset($data)) ? 'selected' : '' }}>Aktif</option>
                                <option value="0" {{ (isset($data) and $data->is_active == false) ? 'selected' : '' }}>Tidak Aktif</option>
                            </select>
                        </div>
                    </div>
                {{-- </div> --}}
                <div class="mb-3">
                    <label for="image" class="form-label">Foto Profil</label><br />
                    <input type="file" name="image" id="image" class="filepond" />
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-dark mx-1" data-toggle="ajax" data-target="{{ route('apps.users') }}">Kembali</button>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-send"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
{{-- 
@if (isset($data))
    @section('_js')
        <script>
            const choices = $('.js-choices')
            console.log(choices[0].choices)
            choices[0].choices.setChoiceByValue('{{ $data->roles[0]->name }}')
        </script>
    @endsection
@endif --}}