@extends('dashboard.layout.index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Edukasi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>

          <div class="row">
        <div class="table-responsive">
          <a href="/dashboardEdukasi/create" class="btn btn-success">Create Data</a>
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
                @foreach ($edukasi as $ed)
                <tr>
                  <td class="col-lg-1 text-center">{{ $loop->iteration }}</td>
                  <td class="col-lg-2">{{ $ed->judul }}</td>
                  <td class="col-lg-4">{{ Str::limit($ed->deskripsi, 150, '.......Lihat lebih lengkapnya di preview')}}</td>
                  <td class="col-lg-3"><img src="{{ asset('storage/' . $ed->gambar )}}" width="250" height="200" alt=""></td>
                  <td class="col-lg-2">
                    <a href="/edukasi/{{ $ed->id }}"><i class="fa-solid text-dark fa-eye"></i></a>
                    <a href="/dashboardEdukasi/{{ $ed->id }}/edit"><i class="fa-solid text-dark fa-edit"></i></a>
                    <form action="/dashboardEdukasi/{{ $ed->id }}" method="post" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="d-inline">
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