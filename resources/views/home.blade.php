@extends('layouts.index')
@section('search')
     <div class="bungkus j3 mx-auto me-lg-2">
          <form action="/alamlist"  class="d-flex bt-search">
            <input class="ip-search form-control" type="search" placeholder="Jembatan Cincin" aria-label="Search" name="search" value="{{ request('search') }}">
            <img class="btn a-search" src="/assets/bt-search.png" alt="">
          </form>
        </div>
      </div>
    </div>
  </nav>
@endsection

@section('content')
      <!-- Caraousel slider -->
  <div class="home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner carousel-innerku">
        <div class="carousel-item carousel-itemku active">
          <img src="assets/tawangmangu.jpg" class="d-block w-100 x-100" alt="assets/cok.jpg">
          <div class="carousel-caption">
            <h1>Wisata Alam</h1>
            <p>Penasaran dengan kota wisata alam di solo? Yuk lihat!</p>
            <a href="/alamlist" class="btn btn-primary-2">More Information</a>
          </div>
        </div>
        <div class="carousel-item carousel-itemku">
          <img src="assets/taman.jpg" class="d-block w-100 x-100" alt="assets/cok.jpg">
          <div class="carousel-caption">
            <h1>Taman</h1>
            <p>Pengen nongkrong ditaman yang asik? bisa cek langsung!</p>
            <a href="/tamanlist" class="btn btn-primary-2">More Information</a>
          </div>
        </div>
        <div class="carousel-item carousel-itemku">
          <img src="assets/wedhangpendopo.jpg" class="d-block w-100 x-100" alt="assets/cok.jpg">
          <div class="carousel-caption">
            <h1>Angkringan & Cafe</h1>
            <p>Ingin ke tempat Estetik? Banyak kok.</p>
            <a href="/cafelist" class="btn btn-primary-2">More Information</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- Ini bagian highlight -->
  {{-- <div class="container des-high text-white min-vh-100">
    <div class="row">
      <div class="col-12">
        <h2 class="des-jud">Destination Highlight</h2>
        <div class="card-ku">
          <div class="row overflow-hidden">
            <div class="card d-flex col-lg-3 col-md-4 col-sm-6 col-12" style="max-width: 100vw;">
              <div id="zoom">
                <a href="#"><img src="assets/cok.jpg" class="card-img-top" alt="..."></a>
              </div>
              <a href="#" class="text-white a-more">More <img src="assets/panah.png" alt=""></a>
              <div class="card-body">
                <p class="card-text">Jatinangor Jawa Barat
                </p>
              </div>
            </div>
            <div class="card d-flex col-lg-3 col-md-4 col-sm-6 col-12" style="max-width: 100vw;">
              <div id="zoom">
                <a href="#"><img src="assets/cok.jpg" class="card-img-top" alt="..."></a>
              </div>
              <a href="#" class="text-white a-more">More <img src="assets/panah.png" alt=""></a>
              <div class="card-body">
                <p class="card-text">Jatinangor Jawa Barat
                </p>
              </div>
            </div>
            <div class="card d-flex col-lg-3 col-md-4 col-sm-6 col-12" style="max-width: 100vw;">
              <div id="zoom">
                <a href="#"><img src="assets/cok.jpg" class="card-img-top" alt="..."></a>
              </div>
              <a href="#" class="text-white a-more">More <img src="assets/panah.png" alt=""></a>
              <div class="card-body">
                <p class="card-text">Jatinangor Jawa Barat
                </p>
              </div>
            </div>
            <div class="card d-flex col-lg-3 col-md-4 col-sm-6 col-12" style="max-width: 100vw;">
              <div id="zoom">
                <a href="#"><img src="assets/cok.jpg" class="card-img-top" alt="..."></a>
              </div>
              <a href="#" class="text-white a-more">More <img src="assets/panah.png" alt=""></a>
              <div class="card-body">
                <p class="card-text">Jatinangor Jawa Barat
                </p>
              </div>
            </div>
            <div class="card d-flex col-lg-3 col-md-4 col-sm-6 col-12" style="max-width: 100vw;">
              <div id="zoom">
                <a href="#"><img src="assets/cok.jpg" class="card-img-top" alt="..."></a>
              </div>
              <a href="#" class="text-white a-more">More <img src="assets/panah.png" alt=""></a>
              <div class="card-body">
                <p class="card-text">Jatinangor Jawa Barat
                </p>
              </div>
            </div>
            <div class="card d-flex col-lg-3 col-md-4 col-sm-6 col-12" style="max-width: 100vw;">
              <div id="zoom">
                <a href="#"><img src="assets/cok.jpg" class="card-img-top" alt="..."></a>
              </div>
              <a href="#" class="text-white a-more">More <img src="assets/panah.png" alt=""></a>
              <div class="card-body">
                <p class="card-text">Jatinangor Jawa Barat
                </p>
              </div>
            </div>
            <div class="card d-flex col-lg-3 col-md-4 col-sm-6 col-12" style="max-width: 100vw;">
              <div id="zoom">
                <a href="#"><img src="assets/cok.jpg" class="card-img-top" alt="..."></a>
              </div>
              <a href="#" class="text-white a-more">More <img src="assets/panah.png" alt=""></a>
              <div class="card-body">
                <p class="card-text">Jatinangor Jawa Barat
                </p>
              </div>
            </div>
            <div class="card d-flex col-lg-3 col-md-4 col-sm-6 col-12" style="max-width: 100vw;">
              <div id="zoom">
                <a href="#"><img src="assets/cok.jpg" class="card-img-top" alt="..."></a>
              </div>
              <a href="#" class="text-white a-more">More <img src="assets/panah.png" alt=""></a>
              <div class="card-body">
                <p class="card-text">Jatinangor Jawa Barat
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <!-- end highlight -->


  <!-- Spot Rekomendasi -->
  <div class="container spot text-white">
    <div class="row">
      <div class="col-12">
        <h2 class="spot-jud">Tongkrongan Rekomendasi</h2>
        <div class="row pt-4">
          <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div id="carouselExampleControls" class="carousel-ku carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/omahlondo.jpg" class="d-block w-100 h-100" alt="assets/cok.jpg">
                </div>
                <div class="carousel-item">
                  <img src="assets/wedhangpendopo.jpg" class="d-block w-100 h-100" alt="">
                </div>
                <div class="carousel-item">
                  <img src="assets/tirtonadi.jpg" class="d-block w-100 h-100" alt="">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="mb-sm-5 mt-4">
              <h3>Cafe & Angkringan</h3>
              <p class="all-text">Halo kalian penggemar tempat-tempat estetik dan juga menarik!!! khususnya buat kalian yang ada di kota Solo. Cuman diwebsite ini loh yang memberikan informasi secara lengkap. Ada berbagai macam tempat tongkrongan baik itu berbentuk Cafe sampai sekedar angkringan. Jangan salah mereka juga menjamin kualitas produk mereka kok, jadi kalian yang mau jalan-jalan ke Solo, yukk lihat semua lokasi menarik di Website ini, ajak juga teman kalian kesini yakkk!! 
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-12 overflow-hidden">
            <h3>Wisata Alam</h3>
            <p class="all-text">Gak cuma sampe tongkrongan aja yang ada di website ini loh, kita juga punya beberapa wisata yang bisa jadi tempat kalian healing hihi. Kalian lebih tertarik wisata edukasi yang mengarah bahas sejarah atau lebih suka menikmati wisata alam seperti di pantai atau semacamnya nih? Jangan sampe ketinggalan update dari kami ya, cuma ada di website ini yang membahas wisata edukasi maupun alam yang juga menyediakan informasi detailll bangetttt.</p>
              <img src="assets/tawangmangu.jpg" style="max-width: 100%; " alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--End Spot Rekomendasi -->

  <!-- About -->
  <div class="container about text-white mt-2">
    <div class="row">
      <div class="col-lg-7 col-sm-12 col-md-7 jud-about">
        <h2>About Us</h2>
        <p class="all-text ">
         Selamat datang diwebsite yang menyediakan berbagai informasi mengenai destinasi menarik serta estetik di kota tercinta yaitu Solo. Kami merancang website ini untuk memenuhi kebutuhan kalian yang tinggal di sekitar solo bahkan bagi kalian yang berada diluar solo dan ingin berlibur ke kota ini. Mulai sekarang kalian dapat langsung mendapatkan informasi secara langsung serta juga 
        </p>
      </div>
      <div class="news col-lg-5 col-sm-12 col-md-5">
        <h2 class="h-news">News</h2>
        <p class="news-p all-text">Apa yang baru? Tenang aja walaupun website kami ini baru saja dibuat, kami tetap berusaha akan ada perbaikan maupun juga hal baru yang dapat memanjakan kalian. Jadi tetap selalu update yaa di website kami ini.</p>
      </div>
    </div>
    <div class="row">

      <div class="col-5 col-lg-5">
      </div>
      <div class="col-lg-3">
      </div>
    </div>
  </div>
@endsection