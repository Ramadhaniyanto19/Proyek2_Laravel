@extends('layouts.index')
@section('search')
     <div class="bungkus j3 mx-auto me-lg-2">
          <form action="/tamanlist"  class="d-flex bt-search">
            <input class="ip-search form-control" type="search" placeholder="Jembatan Cincin" aria-label="Search" name="search" value="{{ request('search') }}">
            <img class="btn a-search" src="/assets/bt-search.png" alt="">
          </form>
        </div>
      </div>
    </div>
  </nav>
@endsection
@section('content')
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-12 h-100 bg-taman mb-5 pb-lg-3">
                <h2 class=" border-bot pt-3 ff-taman text-white mb-3">Taman Favorite</h2>
                <img src="assets/tirtonadi.jpg" class="img-tamanfav" alt="">
                <p class="text-white ff-taman mt-2">Selamat datang di kota Solo, disini terdapat beragam tempat-tempat menarik dan juga estetik. Buat kalian yang merasa lelah dan mungkin sekedar ingin piknik bersama dengan keluarga, ada juga beberapa taman yang terkenal di kota Solo ini. Langsung aja cek selengkapnya di bawah ini yaa...</p>
                <div class="daftar-taman h-100 pt-3 mt-2">
                    <h2 class="border-bot text-white ff-taman">Daftar Taman</h2>
                    <div class="row d-flexjustify-content-center">
                        @foreach ($tamansolo as $ts)
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card d-flex img-taman ">
                                <img src="assets/{{ $ts->gambar }}" alt="...">
                                <div class="text-taman text-white ms-lg-2">
                                    <h3 class=" ff-taman">{{ $ts->judul }}</h3>
                                    <a href="/detailtaman/{{ $ts->id }}" class=" ff-taman text-white btn btn-bg ">More <img
                                        src="assets/panah.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card d-flex img-taman">
                                <img src="assets/cok.jpg" alt="...">
                                <div class="text-taman text-white ms-lg-2">
                                    <h3 class=" ff-taman">Tawangsari</h3>
                                    <a href="#" class="text-white ff-taman btn btn-bg ">More <img src="assets/panah.png"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="card d-flex img-taman">
                                <img src="assets/cok.jpg" alt="...">
                                <div class="text-taman2 text-white ms-lg-2">
                                    <h2 class="ff-taman">Tawangsari</h2>
                                    <a href="#" class=" ff-taman text-white btn btn-bg ">More <img
                                            src="assets/panah.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="card d-flex img-taman">
                                <img src="assets/cok.jpg" alt="...">
                                <div class="text-taman2 text-white ms-lg-2">
                                    <h2 class="ff-taman">Tawangsari</h2>
                                    <a href="#" class=" ff-taman text-white btn btn-bg ">More <img
                                            src="assets/panah.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="card d-flex img-taman">
                                <img src="assets/cok.jpg" alt="...">
                                <div class="text-taman2 text-white ms-lg-2">
                                    <h2 class="ff-taman">Tawangsari</h2>
                                    <a href="#" class=" ff-taman text-white btn btn-bg ">More <img
                                            src="assets/panah.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

@endsection