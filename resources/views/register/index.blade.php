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
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-white text-center">Please Register!!</h1>
              <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                  <input type="text" class="form-control rounded-top @error('username')
                    is-invalid
                  @enderror" id="username" name="username" required value="{{ old('username') }}" placeholder="username@example.com">
                  <label for="username">Username</label>
                   @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                   @enderror
                </div>
                <div class="form-floating">
                  <input type="email" class="form-control  @error('email')
                    is-invalid
                  @enderror" id="email" name="email" required value="{{ old('email') }}"  placeholder="name@example.com">
                  <label for="email">Email address</label>
                   @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                   @enderror
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control rounded-bottom  @error('password')
                    is-invalid
                  @enderror" required id="Password" name="password" placeholder="Password">
                  <label for="Password">Password</label>
                   @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                   @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                <small class="text-center d-block mt-3 text-white">Already Registered? <a href="/login">Please Login!</a></small>
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2017–2022</p>
              </form>
            </main>
        </div>
    </div>
@endsection