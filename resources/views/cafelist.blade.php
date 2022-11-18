@extends('layouts.index')
@section('search')
     <div class="bungkus j3 mx-auto me-lg-2">
          <form action="/cafelist"  class="d-flex bt-search">
            <input class="ip-search form-control" type="search" placeholder="Jembatan Cincin" aria-label="Search" name="search" value="{{ request('search') }}">
            <img class="btn a-search" src="/assets/bt-search.png" alt="">
          </form>
        </div>
      </div>
    </div>
  </nav>
@endsection
@section('content')
      <div class="img-cafelist"></div>
    <div class="container cafe-list">
        <div class="row">
            <div class="col-lg-4 col-md-4 d-lg-block d-xl-block d-md-block d-sm-none d-none col-12 welcome-img">
                <img src="assets/kopi.jpg" alt="">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="welcome">
                    <h1>Welcome</h1>
                    <h2>List Cafe Solo</h2>
                    <p class="all-text">Halo kalian kaum-kaum yang suka nongki dan juga santuy di tempat estetik. Kami juga memiliki beberapa list cafe yang menarik loh, harganya? wahhh bisa liat langsung aja ke tempatnya yupsss. Kita cuma membagikan informasi tentang cafe ini dalam bentuk yang menarik hihi, soo mimin saranin kalian langsung aja deh liat-liat lisnya.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($cafe as $ca)
            <div class="col-12 mt-4">
                <h3 class="border-bottom">List Cafe</h3>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card d-flex">
                    <img src="assets/{{ $ca->gambar }}" class="img-cafe" alt="...">
                    <div class="text-cafe text-white ms-lg-2">
                        <h4>{{ $ca->judul }}</h4>
                        <a href="/detailcafe/{{ $ca->id }}" class="text-white btn btn-bg ">More <img src="assets/panah.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card d-flex">
                    <img src="assets/cok.jpg" class="img-cafe" alt="...">
                    <div class="text-cafe text-white ms-lg-2">
                        <h4>Tawangsari</h4>
                        <a href="#" class="text-white btn btn-bg ">More <img src="assets/panah.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card d-flex">
                    <img src="assets/cok.jpg" class="img-cafe" alt="...">
                    <div class="text-cafe text-white ms-lg-2">
                        <h4>Tawangsari</h4>
                        <a href="#" class="text-white btn btn-bg ">More <img src="assets/panah.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card d-flex">
                    <img src="assets/cok.jpg" class="img-cafe" alt="...">
                    <div class="text-cafe text-white ms-lg-2">
                        <h4>Tawangsari</h4>
                        <a href="#" class="text-white btn btn-bg ">More <img src="assets/panah.png" alt="">
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection