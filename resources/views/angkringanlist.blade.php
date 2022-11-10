@extends('layouts.index')
@section('search')
     <div class="bungkus j3 mx-auto me-lg-2">
          <form action="/angkringanlist"  class="d-flex bt-search">
            <input class="ip-search form-control" type="search" placeholder="Jembatan Cincin" aria-label="Search" name="search" value="{{ request('search') }}">
            <img class="btn a-search" src="/assets/bt-search.png" alt="">
          </form>
        </div>
      </div>
    </div>
  </nav>
@endsection
@section('content')
     <div class="img-angkringan"></div>
    <div class="container">
        <div class="row d-flex">
            <div class="col-12">
                <h2 class="mt-4 text-white">Angkringan List</h2>
                <p class="border-bottom"></p>
            </div>
            @foreach ($angkringan as $ak)
            <div class="row text-white">
                <div class="list-angkringan col-lg-4 col-md-4 col-xl-4 col-sm-6 col-6">
                    <div class="card bg-dongker angkringan-card" style="height: 27rem; width: 18rem;">
                        <img src="assets/angkringan.jpg" class="card-img-top" alt="...">
                        <div class="card-body card-body-angkringan">
                            <h5 class="card-title">{{ $ak->judul }}</h5>
                            <p class="card-text">{{ Str::limit($ak->deksripsi , 80, 'Baca Selengkapnya...') }}</p>
                            <a href="/detailangkringan/{{ $ak->id }}" class="btn btn-primary float-end me-1">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection