@extends('layouts.index')
@section('content')
        <!-- Image atas -->
    <div class="gambar">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="p-img">Wisata Alam</p>
            </div>
        </div>
    </div>
    <!-- End Image -->

    <!-- Wisata Alam Bag 2 -->
    <div class="container min-vh-100 text-white">
        <div class="row">
            @foreach ($detailalam as $da)
            <div class="col-lg-7">
                <h2>{{ $da->judul }}</h2>
                <div class="main-img">
                    <img src="{{ $da->gambar }}" style="max-width:100%;" alt="">
                </div>
                <p>{{ $da->deskripsi }}</p>
            </div>
            <div class="col-lg-5">
                <h2>Sejarah {{ $da->judul }}</h2>
                <p>{{ $da->sejarah }}</p>
                <iframe
                    src="{{ $da->iframe }}"
                    style="border:0; max-width: 480px; width: 370px; height: 50vh;" class="d-flex mx-auto"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="ed-sos d-flex justify-content-center">
                    <a href="{{ $da->ig }}"><i class="fa-brands fa-instagram fa-2x"></i></a>
                    <a href="{{ $da->twt }}"><i class="fa-brands fa-twitter fa-2x"></i></a>
                    <a href="{{ $da->fb }}"><i class="fa-brands fa-facebook fa-2x"></i></a>
                    <a href="{{ $da->maps }}"><i class="fa-solid fa-map-location-dot fa-2x"></i></a>
                </div>
                <div class="detail-informasi pt-5">
                    <h2 class="header-detail-informasi">Detail Informasi Wisata</h2>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-1 icon-detail-informasi">
                            <i class="fa-solid fa-location-dot fa-2x"></i>
                            <i class="fa-sharp fa-solid fa-clock fa-2x"></i>
                            <i class="fa-solid fa-square-phone fa-2x"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-11 list-detail-informasi">
                            <ul>
                                <li>{{ $da->location }}</li>
                                <li>{{ $da->jam }}</li>
                                <li>{{ $da->nomor_hp }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- End wisata Edukasi Bag 2 -->

    
@endsection