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


    <div class="row mt-5 pt-5 justify-content-center">
        <div class="col-md-8">

          @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-white text-center">Please Login!!</h1>
              <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                  <input type="email" class="form-control @error('email')
                    is-invalid
                  @enderror" id="email" name="email" autocomplete="off" autofocus required value="{{ old('email') }}" placeholder="name@example.com">
                  <label for="email">Email address</label>
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" id="Password" name="password" required placeholder="Password">
                  <label for="Password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                <small class="text-center d-block mt-3 text-white">Not Registered? <a href="/register">Register Now!</a></small>
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2017–2022</p>
              </form>
            </main>
        </div>
    </div>


    
@endsection