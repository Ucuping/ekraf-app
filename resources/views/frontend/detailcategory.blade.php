@extends('frontend.kategori')
@section('title' , 'Berita')

@foreach($data as $detaildata)
<div id="berita" class="container">
    <div class="col-6 col-sm-3 col-lg-6 mx-auto">
        <img class="shadow" src="assets1/img/berita1.jpeg" alt="">
        <h4 class="text-center fw-bold">{{$detaildata -> name}}</h4>
    </div>
    <div class="detail-berita col-10 col-sm-6 col-lg-10 mx-auto">
        <p>Nama Pemilik : {{$detaildata -> owner_name}}</p>
        <p>Alamat : {{$detaildata -> address}}</p>
        <p>Deskripsi Perusahaan : {{$detaildata -> description}}</p>
    </div>
</div>
@endforeach


