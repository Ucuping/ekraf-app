@extends('backend.layouts.ajax')

{{-- @section('breadcrumb')
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
@endsection --}}
@section('content')
    <div class="card intro-y">
        <div class="card-body">
            <form action="{{ $action }}" method="post" data-request="ajax" enctype="multipart/form-data" data-callback="{{ route('apps.companies') }}">
                {{-- <div class="mb-3"> --}}
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12 mb-3">
                            <label for="category" class="form-label">Kategori <i class="text-danger">*</i></label>
                            <select name="category" id="category" class="form-control js-choices">
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}" {{ (isset($data) and $data->category_id == $item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
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
                            <label for="owner_identification_number" class="form-label">NIK Pemilik <i class="text-danger">*</i></label>
                            <input type="text" id="owner_identification_number" name="owner_identification_number" placeholder="NIK Pemilik" autocomplete="off" value="{{ isset($data) ? $data->owner_identification_number : '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-6 col-12 mb-3">
                            <label for="owner_name" class="form-label">Nama Pemilik</label>
                            <input type="text" id="owner_name" name="owner_name" placeholder="Nama Pemilik" autocomplete="off" value="{{ isset($data) ? $data->owner_name : '' }}" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12 mb-3">
                            <label for="haki_number" class="form-label">Nomor HAKI</label>
                            <input type="text" id="haki_number" name="haki_number" placeholder="Nomor HAKI" autocomplete="off" value="{{ isset($data) ? $data->haki_number : '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-6 col-12 mb-3">
                            <label for="facebook_username" class="form-label">Username Facebook </label>
                            <input type="text" name="facebook_username" value="{{ isset($data) ? $data->facebook_username : '' }}" id="facebook_username" class="form-control" autocomplete="off" placeholder="Username Facebook">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12 mb-3">
                            <label for="instagram_username" class="form-label">Username Instagram </label>
                            <input type="text" name="instagram_username" value="{{ isset($data) ? $data->instagram_username : '' }}" id="instagram_username" class="form-control" autocomplete="off" placeholder="Username Instagram">
                        </div>
                        <div class="col-md-6 col-sm-6 col-12 mb-3">
                            <label for="twitter_username" class="form-label">Username Twitter </label>
                            <input type="text" name="twitter_username" value="{{ isset($data) ? $data->twitter_username : '' }}" id="twitter_username" class="form-control" autocomplete="off" placeholder="Username Twitter">
                        </div>
                    </div>
                {{-- </div> --}}
                {{-- <div class="mb-3"> --}}
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat <i class="text-danger">*</i></label>
                        <textarea name="address" id="address" class="form-control" cols="30" rows="10" placeholder="Alamat" autocomplete="off">{{ isset($data) ? $data->address : '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi <i class="text-danger">*</i></label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="Deskripsi" autocomplete="off">{{ isset($data) ? $data->description : '' }}</textarea>
                    </div>
                {{-- </div> --}}
                {{-- <div class="mb-3"> --}}
                {{-- </div> --}}
                <div class="mb-3">
                    <label for="ekraf_logo" class="form-label">Logo</label><br />
                    <input type="file" name="ekraf_logo" id="ekraf_logo" class="filepond" />
                </div>
                <div class="mb-3">
                    <label for="image1" class="form-label">Gambar 1</label><br />
                    <input type="file" name="image1" id="image1" class="filepond" />
                </div>
                <div class="mb-3">
                    <label for="image2" class="form-label">Gambar 2</label><br />
                    <input type="file" name="image2" id="image2" class="filepond" />
                </div>
                <div class="mb-3">
                    <label for="image3" class="form-label">Gambar 3</label><br />
                    <input type="file" name="image3" id="image3" class="filepond" />
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-dark mx-1" data-toggle="ajax" data-target="{{ (!is_null(request()->query('dashboard')) and request()->query('dashboard') == true) ? route('apps.dashboard') : route('apps.companies') }}">Kembali</button>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i> Simpan</button>
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