@extends('backend.layouts.ajax')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('apps.dashboard') }}" data-toggle="ajax">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('apps.validations') }}" data-toggle="ajax">Validasi Ekraf</a>
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
                <button class="btn btn-primary" type="button" data-toggle="ajax" data-target="{{ route('apps.users.create') }}"><i class="fas fa-plus"></i> Tambah</button>
            </div>
        </div> --}}
        <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
                <div class="me-4" style="width: 60px;height: 60px;border-radius: 50%;">
                    <img src="{{ asset('storage/images/companies/logo/' . $data->logo) }}" width="100%">
                </div>
                <div>
                    <strong>{{ $data->name }}</strong>
                    <p class="mb-0 pb-0 text-muted small">{{ $data->owner_name }}</p>
                </div>
            </div>
            <div class="d-flex justify-content-around">
                {{-- <div class="row"> --}}
                    <div class="">
                        <table cellpadding="10">
                            <tr>
                                <th>NIK Pemilik</th>
                                <td>{{ $data->owner_identification_number }}</td>
                            </tr>
                            <tr>
                                <th>Nomor HAKI</th>
                                <td>{{ $data->haki_number ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ substr('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit laudantium dolore voluptatibus modi nostrum natus adipisci dolorem eligendi enim itaque. Quis laboriosam ipsum tempore, consequatur optio voluptates distinctio unde ut similique, deserunt quam ullam quo at modi. Ducimus minima voluptatum at nihil, adipisci nesciunt ab natus possimus quidem dicta vel', 10) }}...</td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis aliquid quasi atque rem iure quidem unde cupiditate? Quaerat officiis consequatur maiores qui voluptas consectetur, dolore repudiandae eum ut dolor repellendus eveniet magnam culpa earum laudantium, quod doloribus aliquam? Rem exercitationem molestias culpa ad? Nobis, animi veniam repellendus accusamus praesentium laborum doloribus itaque aut sapiente nesciunt, doloremque quisquam eum tempore autem quos vero modi nulla, tenetur maxime adipisci laudantium explicabo? Voluptatibus, voluptas officiis hic cumque corporis laboriosam voluptatem vero! Maiores, facere. Delectus odio, dolorem atque excepturi enim, ab exercitationem, modi adipisci deleniti amet nostrum quod assumenda nesciunt praesentium aliquid aspernatur labore.</td>
                            </tr>
                        </table>
                    </div>
                    <div class="">
                        <table cellpadding="10">
                            <tr>
                                <th>Facebook</th>
                                <td>{!! $data->facebook_username != null ? '<a href="https://www.facebook.com/{{ $data->facebook_username }}" _blank noopener>Lihat</a>' : '-' !!}</td>
                            </tr>
                            <tr>
                                <th>Instagram</th>
                                <td>{!! $data->instagram_username != null ? '<a href="https://www.instagram.com/{{ $data->instagram_username }}" _blank noopener>Lihat</a>' : '-' !!}</td>
                            </tr>
                            <tr>
                                <th>Twitter</th>
                                <td>{!! $data->twitter_username != null ? '<a href="https://www.twitter.com/{{ $data->twitter_username }}" _blank noopener>Lihat</a>' : '-' !!}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $data->status == 'pending' ? 'Menunggu Verifikasi' : ($data->status == 'approved' ? 'Terverifikasi' : 'Ditolak') }}</td>
                            </tr>
                        </table>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
@endsection