@extends('layouts.index')

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
          <img src="assets/cok.jpg" class="d-block w-100 x-100" alt="assets/cok.jpg">
          <div class="carousel-caption">
            <h1>First slide label</h1>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item carousel-itemku">
          <img src="assets/cok.jpg" class="d-block w-100 x-100" alt="assets/cok.jpg">
          <div class="carousel-caption">
            <h1>Second slide label</h1>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item carousel-itemku">
          <img src="assets/cok.jpg" class="d-block w-100 x-100" alt="assets/cok.jpg">
          <div class="carousel-caption">
            <h1>Third slide label</h1>
            <p>Some representative placeholder content for the third slide.</p>
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
  <div class="container des-high text-white min-vh-100">
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
  </div>

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
                  <img src="assets/cok.jpg" class="d-block w-100 h-100" alt="assets/cok.jpg">
                </div>
                <div class="carousel-item">
                  <img src="assets/uhuy.jpg" class="d-block w-100 h-100" alt="">
                </div>
                <div class="carousel-item">
                  <img src="assets/cok.jpg" class="d-block w-100 h-100" alt="">
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
            <div class="mb-sm-5">
              <h3>Bandung Trade Mall</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero saepe qui deserunt obcaecati
                necessitatibus, beatae, reprehenderit officia aperiam ut amet delectus nisi! Dignissimos
                quasi commodi,
                harum rem officia perspiciatis a Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Sint fugiat
                aliquam, accusamus voluptas eligendi ex perspiciatis quod velit dicta dolore.
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-12 overflow-hidden">
            <h3>Karanganyar Beach</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quod, enim nihil inventore fugit
              voluptate
              corporis facilis dolorem officiis libero ut adipisci? Repellat enim iste eaque,
              exercitationem tempore
              numquam ab!</p>
            <img src="assets/test.png" style="max-width: 100%; " alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--End Spot Rekomendasi -->

  <!-- About -->
  <div class="container about text-white mt-2">
    <div class="row">
      <div class="col-lg-8 col-sm-12 col-md-7 jud-about">
        <h2>About</h2>
        <p class="d-lg-flex"><img src="assets/test.png" class="img-about" alt="">Lorem
          ipsum
          dolor, sit amet consectetur adipisicing elit. Nihil molestiae, commodi sit, recusandae
          doloremque
          illum quo doloribus dolore incidunt esse officiis dolores impedit, consequatur minima nulla
          perferendis ad
          autem dignissimos quos alias saepe modi architecto inventore earum! Quasi aut ducimus commodi
          reiciendis,
          perspiciatis odit explicabo placeat tenetur distinctio dicta nisi in laborum natus sunt, vero
          aliquid beatae
          corporis expedita asperiores veritatis optio quaerat! Vitae officia itaque qui, nostrum eos beatae
          deleniti
          quasi dolor voluptatibus ab, conu
        </p>
      </div>
      <div class="news col-lg-4 col-sm-12 col-md-5">
        <h2 class="h-news">News</h2>
        <p class="news-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi reprehenderit ipsam
          aut
          incidunt iusto
          corrupti sit, asperiores nulla, et rem architecto repudiandae totam? Assumenda ipsa non esse maiores
          expedita
          consequatur.</p>
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