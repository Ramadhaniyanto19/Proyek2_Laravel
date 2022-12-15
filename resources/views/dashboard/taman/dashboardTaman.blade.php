@extends('dashboard.layout.index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Taman</h1>
      </div>
      @if (session()->has('success'))
          <div class="alert alert-success col-8" role="alert">
            {{ session('success') }}
          </div>
      @endif
          <div class="row">
        <div class="table-responsive">
          <a href="/dashboardTaman/create" class="btn btn-success">Create Data</a>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th class="text-center" >No</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Gambar</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($taman as $ta)
                <tr>
                  <td class="col-lg-1 text-center">{{ $loop->iteration }}</td>
                  <td class="col-lg-2">{{ $ta->judul }}</td>
                  <td class="col-lg-4">{{ Str::limit($ta->deskripsi, 150, '.......Lihat lebih lengkapnya di preview')}}</td>
                  <td class="col-lg-3"><img src="{{ asset('storage/' . $ta->gambar )}}" width="250" height="200" alt=""></td>
                  <td class="col-lg-2">
                    <a href="/detailtaman/{{ $ta->id }}"><i class="fa-solid text-dark fa-eye"></i></a>
                    <a href="/dashboardTaman/{{ $ta->id }}/edit"><i class="fa-solid text-dark fa-edit"></i></a>
                    <form action="/dashboardTaman/{{ $ta->id }}" method="post" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="d-inline">
                     @method('delete')
                     @csrf
                    <button class="border-0"><i class="fa-solid text-dark fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection