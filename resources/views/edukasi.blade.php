@extends('layouts.index')
@section('search')
     <div class="bungkus j3 mx-auto me-lg-2">
          <form action="/edukasilist"  class="d-flex bt-search">
            <input class="ip-search form-control" type="search" placeholder="Jembatan Cincin" aria-label="Search" name="search" value="{{ request('search') }}">
            <img class="btn a-search" src="/assets/bt-search.png" alt="">
          </form>
        </div>
      </div>
    </div>
  </nav>
@endsection
@section('content')
        <!-- Image atas -->
   <div class=" container pt-5 mt-3">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    @foreach($detailedukasi as $de) 
                    <h1 class="garis-bawah text-white ff-taman">Detail Wisata Alam {{ $de->judul }}</h1>
                    @can('admin')
                    <a class="btn mt-2 mb-2 btn-success" href="/dashboardEdukasi"><i class="fa-solid fa-1x fa-dashboard"></i> Kembali ke Dashboard</a>
                    <a class="btn mt-2 mb-2 btn-warning" href="/dashboardEdukasi{{ $de->id }}/edit"><i class="fa-solid fa-1x fa-edit"></i> Edit Postingan</a>
                    <form action="/dashboardEdukasi/{{ $de->id }}" method="post" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="d-inline">
                     @method('delete')
                     @csrf
                    <button class=" btn btn-danger"><i class="fa-solid text-dark fa-trash"></i> Hapus Postingan</button>
                    </form>
                    {{-- <a class="btn mb-2 btn-danger" href="/dashboardAlam/{{ $da->id }}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa-solid fa-1x fa-trash"></i> Hapus Postingan</a> --}}
                    @endcan
                    <iframe class="maps-detailtaman col-12"
                    src="{{ $de->iframe }}"
                    width="350" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                    @endforeach
                </div>
            </div>
            <div class="col-12">
                <p class="p-img">Wisata Edukasi</p>
            </div>
        </div>
    <!-- End Image -->

    <!-- Wisata Alam Bag 2 -->
    <div class="container min-vh-100 text-white">
        <div class="row">
            @foreach ($detailedukasi as $de)
            <div class="col-lg-7">
                <h2>{{ $de->judul }}</h2>
                <div class="main-img">
                    <img src="{{ asset('storage/'. $de->gambar) }}" style="max-width:100%;" alt="">
                </div>
                <p class="deskripsi-edukasi">{{ $de->deskripsi }}</p>
            </div>
            <div class="col-lg-5">
                <h2>Sejarah {{ $de->judul }}</h2>
                <p class="sejarah-edukasi">{{ $de->sejarah }}</p>
                <iframe
                    src="{{ $de->maps }}"
                    style="border:0; max-width: 480px; width: 370px; height: 50vh;" class="d-flex mx-auto"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="ed-sos d-flex justify-content-center">
                    <a href="{{ $de->ig }}"><i class="fa-brands fa-instagram fa-2x"></i></a>
                    <a href="{{ $de->twt }}"><i class="fa-brands fa-twitter fa-2x"></i></a>
                    <a href="{{ $de->fb }}"><i class="fa-brands fa-facebook fa-2x"></i></a>
                    <a href="{{ $de->maps }}"><i class="fa-solid fa-map-location-dot fa-2x"></i></a>
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
                                <li>{{ $de->location }}</li>
                                <li>{{ $de->jam }}</li>
                                <li>{{ $de->nomor_hp }}</li>
                            </ul>
                        </div>
                        <a href="/edukasilist" class="btn btn-primary mt-3 ff-taman"> <i class="fa-solid fa-arrow-left"></i>
                    Kembali ke list
                    Edukasi</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- End wisata Edukasi Bag 2 -->

    
@endsection