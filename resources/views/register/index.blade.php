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
                <h1 class="h3 mb-3 fw-normal text-white text-center">Daftar Tamu</h1>
                <p class="text-center text-white">Jadikan nama kalian menjadi salah satu bagian dari para pengunjung kami!! caranya? cukup isi saja daftar tamu yang ada dibawah ini!!</p>
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
                  <input type="hidden" class="form-control rounded-bottom  @error('password')
                    is-invalid
                  @enderror" id="password" name="password" placeholder="password">
                  <label for="password">password</label>
                   @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                   @enderror
                </div>
                <div class="form-floating">
                  <input type="text" class="form-control rounded-bottom  @error('alamat')
                    is-invalid
                  @enderror" required id="Alamat" name="alamat" placeholder="Alamat">
                  <label for="Alamat">Alamat</label>
                   @error('alamat')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                   @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Simpan</button>
                {{-- <small class="text-center d-block mt-3 text-white">Already Registered? <a href="/login">Please Login!</a></small> --}}
              </form>
                <div class="row pt-4">
                <div class="table-responsive bg-primary">
                  {{-- <a href="/dashboardAlam/create" class="btn btn-primary mb-3">Create Data</a> --}}
                    <table class="table table-striped table-sm">
                      <thead>
                        <tr>
                          <th class="text-center" >No</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Alamat</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pengunjung as $p)
                        <tr>
                          <td class="col-lg-1 text-center">{{ $loop->iteration }}</td>
                          <td class="col-6">{{ $p->username }}</td>
                          <td class="col-6">{{ $p->email }}</td>
                          <td class="col-6">{{ $p->alamat }}</td>
                          {{-- <td class="col-lg-3">
                            <a href="/alam/{{ $p->id }}"><i class="fa-solid text-dark fa-eye"></i></a>
                            <a href="/dashboardAlam/{{ $p->id }}/edit"><i class="fa-solid text-dark fa-edit"></i></a>
                            <form action="/dashboardAlam/{{ $p->id }}" method="post" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="border-0"><i class="fa-solid text-dark fa-trash"></i></button>
                            </form>
                          </td> --}}
                          {{-- <td class="col-lg-7">{{ $al->sejarah }}</td>
                          <td class="col">{{ $al->location }}</td>
                          <td class="col">{{ $al->jam }}</td>
                          <td class="col">{{ $al->no_hp }}</td>
                          <td class="col">{{ $al->ig }}</td>
                          <td class="col">{{ $al->twt }}</td>
                          <td class="col">{{ $al->fb }}</td>
                          <td class="col">{{ $al->maps }}</td>
                          <td class="col">{{ $al->iframe }}</td> --}}
                        </tr>
                        <tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2017–2022</p>

            </main>
        </div>
    </div>
@endsection