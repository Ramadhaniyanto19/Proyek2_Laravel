@extends ('layouts.index')
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
     <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-12 h-100 bg-taman mb-5 pb-lg-3">
                <div class="daftar-taman h-100 pt-3 mt-2">
                    <h2 class="border-bot text-white ff-taman">Daftar Wisata Edukasi</h2>
                    <div class="row">
                        @foreach ($edukasilist as $el)
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="card d-flex">
                                <img src="{{ $el->gambar }}" class="img-taman" alt="...">
                                <div class="text-taman2 text-white ms-lg-2">
                                    <h2 class="ff-taman">{{ $el->judul }}</h2>
                                    <a href="/edukasi/{1}" class=" ff-taman text-white btn btn-bg ">More <img
                                        src="assets/panah.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="card d-flex">
                                <img src="assets/cok.jpg" class="img-taman" alt="...">
                                <div class="text-taman2 text-white ms-lg-2">
                                    <h2 class="ff-taman">Tawangsari</h2>
                                    <a href="#" class=" ff-taman text-white btn btn-bg ">More <img
                                            src="assets/panah.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="card d-flex">
                                    <img src="assets/cok.jpg" class="img-taman" alt="...">
                                    <div class="text-taman2 text-white ms-lg-2">
                                        <h2 class="ff-taman">Tawangsari</h2>
                                        <a href="#" class=" ff-taman text-white btn btn-bg ">More <img
                                            src="assets/panah.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div> --}}
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
    @endsection