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
    <div class="container detail-taman">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <h1 class="garis-bawah ff-taman">Detail Taman</h1>
                @foreach($tamanku as $tm)
                    
                <iframe class="maps-detailtaman col-12"
                src="{{ $tm->iframe }}"
                width="350" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
                @endforeach
                {{-- <img src="assets/test.png" class="img-detail-taman d-xl-block d-lg-block d-md-block d-sm-none d-none"
                alt=""> --}}
                <div class="row pt-4">
                    @foreach ($tamanku as $tm)
                    <div class="col-xl-8 col-lg-8 col-md-7 mt-3 mt-xl-0 mt-md-0 mt-lg-0 mt-sm-0 col-sm-12 col-12">
                        <h3 class="garis-bawah ff-taman">{{ $tm->judul }}</h3>
                        <div class="row text-center">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
                                <img src="{{ asset('storage/' . $tm->gambar) }}" class="gambar2-detail-taman" alt="">
                            </div>
                            {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-12 ">
                                <img src="assets/kopi.jpg" class="gambar2-detail-taman gambar-bawah-sm" alt="">
                            </div> --}}
                        </div>
                        <p class=" ff-taman">{{$tm->deskripsi}}</p>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                        <h3 class="garis-bawah ff-taman">Informasi Taman</h3>
                        <iframe class="maps-detailtaman col-12"
                            src="{{ $tm->maps }}"width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-1 d-flex flex-column">
                                <div class="icon-detailtaman">
                                    <i class="fa-solid fa-location-dot fa-2x"></i>
                                    <i class="fa-sharp fa-solid fa-clock fa-2x"></i>
                                    <i class="fa-solid fa-square-phone fa-2x"></i>
                                </div>
                            </div>
                            <div class="col-md-11 col-sm-11 col-lg-11 col-11">
                                <ul class="isi-detail-taman ff-taman">
                                    <li>{{ $tm->location }}</li>
                                    <li>{{ $tm->jam }}</li>
                                    <li>{{ $tm->nomor_hp }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="/tamanlist" class="btn btn-primary mt-3 ff-taman"> <i class="fa-solid fa-arrow-left"></i>
                    Kembali ke
                    List
                    Taman</a>
            </div>
        </div>
    </div>
@endsection