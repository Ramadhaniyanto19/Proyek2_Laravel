@extends('dashboard.layout.index')
@section('content')
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Pengunjung </h1>
      </div>
      @if (session()->has('success'))
          <div class="alert alert-success col-8" role="alert">
            {{ session('success') }}
          </div>
      @endif
      <div class="row">
        <div class="table-responsive">
          {{-- <a href="/dashboardAlam/create" class="btn btn-primary mb-3">Create Data</a> --}}
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th class="text-center" >No</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  {{-- <th>Jam</th>
                    <th>Sejarah</th>
                    <th>Location</th>
                  <th>No Hp</th>
                  <th>Instagram</th>
                  <th>Twitter</th>
                  <th>Facebook</th>
                  <th>Maps</th>
                  <th>Iframe</th> --}}
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
@endsection