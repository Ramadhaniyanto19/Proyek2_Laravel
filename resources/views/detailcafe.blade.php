@extends('layouts.index')

@section('content')
        <div class="container cafe">
        <div class="row">
            <!-- Kiri dropdown -->
            <div class="col-lg-3 col-md-3 d-sm-none d-lg-block d-md-none cafe-kiri">
                <div class="btn-group d-flex flex-column">
                    <button class="btn text-white" href="index.html">Home</button>
                    <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuClickableInside"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        Top 5 Best Cafe
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                </div>
            </div>

            <!-- End kiri dropdown -->

            <!-- Tengah  -->
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                <div class="cafe-tengah">
                    <img src="assets/test.png" class="gambar-tengah ms-1" alt="">
                    <h5 class="nama-halaman">Tongkrongan <i class="fa-solid fa-arrow-right fa-2xs"></i> Cafe</h5>
                    <p class="horizontal-cafe"></p>
                    <div class="isi-cafe">
                        <h4>Kulino Cafe</h4>
                        <div class="row text-center">
                            <div class="col-lg-6 col-md-5 col-sm-6 isi-gambar">
                                <img src="assets/test.png" alt="">
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-6 isi-gambar-2">
                                <img src="assets/kopi.jpg" alt="">
                                <img src="assets/kopi.jpg" class="mt-1" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="deskripsi-cafe">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis facere id sapiente
                            excepturi, qui a eveniet maiores aliquid quisquam veniam! Quibusdam ratione aliquid corrupti
                            sequi eum asperiores molestias rerum. Nesciunt? Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Illum inventore aliquid labore, quibusdam omnis nostrum doloremque eos
                            consectetur iste praesentium!</p>
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
                                        <li>Jalan bandung raya no 3, kecamatan bandung, jawa barat indonesia</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>087754621313</li>
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
                <img src="assets/kopi.jpg" class="gambar-kanan" alt="">
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
                            <ul>
                                <li>Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Laboriosam, reiciendis.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>087754621313</li>
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
                                <a href="">
                                    <li>Bandung Trade mall</li>
                                </a>
                                <a href="">
                                    <li>Bandung Trade mall</li>
                                </a>
                                <a href="">
                                    <li>Bandung Trade mall</li>
                                </a>
                                <a href="">
                                    <li>Bandung Trade mall</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Kanan -->
@endsection