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
        <div class="container cafe">
        <div class="row">
            <!-- Kiri dropdown -->
            <div class="col-lg-3 col-md-3 d-sm-none d-lg-block d-md-none cafe-kiri">
                <div class="btn-group d-flex flex-column">
                    <a href="/alam" class="btn btn-primary-2 mt-4">Wisata Alam</a>
                    <a href="/edukasi" class="btn btn-primary-2 mt-4">Wisata Edukasi</a>
                    <a href="/tamanlist" class="btn btn-primary-2 mt-4">Taman</a>
                    <a href="/angkringanlist" class="btn btn-primary-2 mt-4">Angkringan</a>
                    <a href="/cafelist" class="btn btn-primary-2 mt-4">Kembali Ke Cafe List</a>
                    {{-- <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuClickableInside"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        Top 5 Best Cafe
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul> --}}
                </div>
            </div>

            <!-- End kiri dropdown -->

            <!-- Tengah  -->
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                @foreach ($detailcafe as $dc)
                <div class="cafe-tengah">
                     <iframe class="maps-detailtaman col-12"
                            src="{{ $dc->iframe }}"width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5 class="nama-halaman">Tongkrongan <i class="fa-solid fa-arrow-right fa-2xs"></i> Cafe</h5>
                    <p class="horizontal-cafe"></p>
                    <div class="isi-cafe">
                        <h4>{{ $dc->judul }}</h4>
                        <div class="row text-center">
                            <div class="col-lg-12 col-md-12 col-sm-12 isi-gambar">
                                <img src="assets/{{ $dc->gambar }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="deskripsi-cafe">
                        <p>{{ $dc->deskripsi }}</p>
                    </div>
                    <div class="tengah-sm pt-2">
                        <h5>Place Information</h5>
                        <p class="horizontal-cafe over"></p>
                        <div class="place-information">
                            <div class="row">
                                <div class="col-1">
                                    <div class="d-flex flex-column icon-tengah-sm">
                                        <i class="fa-solid fa-location-dot fa-2x"></i>
                                        <i class="fa-sharp fa-solid fa-clock fa-2x"></i>
                                        <i class="fa-solid fa-square-phone fa-2x"></i>
                                    </div>
                                </div>
                                <div class="col-11 information-sm">
                                    <ul>
                                        <li>{{ $dc->location }}</li>
                                        <li>{{ $dc->jam }}</li>
                                        <li>{{ $dc->nomor_hp }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Tengah  -->

            <!-- Kanan -->
            <div class="col-lg-3 d-lg-block d-md-none d-sm-none cafe-kanan">
                 <iframe class="maps-detailtaman col-12"
                            src="{{ $dc->maps }}"width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="info-cafe pt-1">
                    <div class="row">
                        <div class="col-lg-1 d-flex flex-column">
                            <div class="icon-cafe">
                                <i class="fa-solid fa-location-dot fa-2x"></i>
                                <i class="fa-sharp fa-solid fa-clock fa-2x pt-5"></i>
                                <i class="fa-solid fa-square-phone fa-2x pt-5"></i>
                            </div>
                        </div>
                        <div class="col-lg-11">
                            <ul class="li-tulisan-cafe">
                                <li>{{$dc->location}}</li>
                                <li class="pt-4">{{ $dc->jam }}</li>
                                <li>{{ $dc->nomor_hp }}</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="rekomendasi-cafe">
                    <div class="row">
                        <h5>Rekomendasi Tempat</h5>
                        <div class="col-lg-1 d-flex flex-column">
                            <div class="icon-rekomendasi">
                                <i class="fa-sharp fa-solid fa-plane fa-1x pt-2"></i>
                                <i class="fa-sharp fa-solid fa-plane fa-1x pt-2"></i>
                                <i class="fa-sharp fa-solid fa-plane fa-1x pt-2"></i>
                                <i class="fa-sharp fa-solid fa-plane fa-1x pt-2"></i>
                            </div>
                        </div>
                        <div class="col-lg-11">
                            <ul>
                                <a href="/detailcafe/{{ $dc->id }}}">
                                    <li> {{ ($dc->judul)  }}</li>
                                </a>
                                {{-- <a href="">
                                    <li>Bandung Trade mall</li>
                                </a>
                                <a href="">
                                    <li>Bandung Trade mall</li>
                                </a>
                                <a href="">
                                    <li>Bandung Trade mall</li>
                                </a> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

    <!-- End Kanan -->
@endsection