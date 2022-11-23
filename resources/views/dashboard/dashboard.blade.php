@extends('dashboard.layout.index')

@section('content')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Export</button> --}}
          </div>
        </div>
      </div>
      <div class="dashboard">
        <div class="row justify-content-center">
          <h4 class="mb-5">Welcome Back Admin, Have a nice day!</h4>
          <div class="col-lg-3 mt-2 me-2 h-50 bg-dark justify-content-center text-white">
            <div class="row me-2">
              <div class="mt-2 col-lg-5 col-md-6 justify-content-center text-center">
                <i class="fa-sharp fa-solid text-success fa-person-hiking fa-4x"></i>
              </div> 
              <div class="mt-2 pb-4 col-lg-7 text-center">
                <h5>Wisata Alam</h5>
                <h6>{{ $jmlalam }}</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-2 me-2 h-50 bg-dark justify-content-center text-white">
            <div class="row me-2">
              <div class="mt-2 col-lg-4 col-md-6 justify-content-center text-center">
                <i class="fa-solid fa-school text-warning fa-4x"></i>
              </div> 
              <div class="mt-2 pb-4 col-lg-8 text-center">
                <h5>Wisata Edukasi</h5>
                <h6>{{ $jmledukasi }}</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-2 me-2 h-50 bg-dark justify-content-center text-white">
            <div class="row me-2">
              <div class="mt-2 col-lg-5 col-md-6 justify-content-center text-center">
               <i class="fa-solid fa-mug-saucer fa-4x"></i>
              </div> 
              <div class="mt-2 pb-4 col-lg-7 text-center">
                <h5>Cafe</h5>
                <h6>{{ $jmlcafe }}</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-5 me-2 mt-2 h-100 bg-dark text-white">
            <div class="row me-2">
              <div class="mt-2 col-lg-5 col-md-6 justify-content-center text-center">
               <i class="fa-solid fa-smoking fa-3x text-light"></i>
              </div> 
              <div class="mt-2 pb-2 col-lg-7 text-center">
                <h5>Angkringan</h5>
                <h6>{{ $jmlangkringan }}</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-5  mt-2 h-50 bg-dark text-white">
            <div class="row me-2">
              <div class="mt-2 col-lg-5 col-md-6 justify-content-center text-center">
                <i class="fa-solid fa-tree fa-3x text-success"></i>
              </div> 
              <div class="mt-2 pb-2 col-lg-7 text-center">
                <h5>Taman</h5>
                <h6>{{ $jmltaman }}</h6>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection