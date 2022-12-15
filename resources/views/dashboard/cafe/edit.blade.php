@extends('dashboard.layout.index')

@section('content')
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
      </div>
      <div class="col-8">
          <form method="post" action="/dashboardCafe/{{ $cafe->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
              <div class="mb-3">
                  <label for="judul" class="form-label @error('judul')
                      is-invalid
                  @enderror">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $cafe->judul) }}" required>
                  @error('judul')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="deskripsi" class="form-Label @error('deskripsi')
                      is-invalid
                  @enderror">Deskripsi</label>
                  @error('deskripsi')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                  <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $cafe->deskripsi) }}" required>
                  <trix-editor input="deskripsi"></trix-editor>
              </div>
              <div class="mb-3">
                  <label for="Gambar" class="form-label @error('is-invalid') @enderror">Gambar</label>
                  <input type="hidden" name="oldGambar" value="{{ $cafe->gambar }}" id="">
                  <input type="file" class="form-control" id="Gambar" name="gambar" value="{{ old('gambar' , $cafe->gambar) }}">
                  @error('gambar')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="Location" class="form-labe @error('location')
                      is-invalid
                  @enderror">Location</label>
                  <input type="text" class="form-control" id="Location" name="location" value="{{ old('location', $cafe->location) }}" required>
                  @error('location')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="Jam" class="form-label @error('jam')
                      is-invalid
                  @enderror">Jam</label>
                  <input type="text" class="form-control" id="Jam" name="jam" value="{{ old('jam' , $cafe->jam) }}" required>
                  @error('jam')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="Nomor Handphone" class="form-label @error('nomor_hp')
                      is-invalid
                  @enderror">Nomor Handphone</label>
                  <input type="text" class="form-control" id="Nomor Handphone" name="nomor_hp" value="{{ old('nomor_hp' , $cafe->nomor_hp) }}" required>
                  @error('nomor_hp')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="maps" class="form-label @error('maps')
                      is-invalid
                  @enderror">Maps</label>
                  <input type="text" class="form-control" id="maps" name="maps" value="{{ old('maps' , $cafe->maps)}}" required>
                  @error('maps')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="iframe" class="form-label @error('iframe')
                      is-invalid
                  @enderror">Iframe</label>
                  <input type="text" class="form-control" id="iframe" name="iframe" value="{{ old('iframe', $cafe->iframe) }}" required>
                  @error('iframe')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                  @enderror
              </div>
              <button type="submit" class="btn btn-primary mb-5">Submit</button>
          </form>
      </div>
@endsection