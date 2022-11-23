@extends('dashboard.layout.index')

@section('content')
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
      </div>
      <div class="col-8">
          <form method="post" action="/dashboardEdukasi/{{ $edukasi ->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
              <div class="mb-3">
                  <label for="judul" class="form-label @error('judul')
                      is-invalid
                  @enderror">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $edukasi->judul) }}" required>
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
                  <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $edukasi->deskripsi) }}" required>
                  <trix-editor input="deskripsi"></trix-editor>
              </div>
              <div class="mb-3">
                  <label for="sejarah" class="form-Label @error('sejarah')
                      is-invalid
                      @enderror">Sejarah</label>
                      @error('sejarah')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                  <input id="sejarah" type="hidden" name="sejarah" value="{{ old('sejarah', $edukasi->sejarah) }}" required>
                  <trix-editor input="sejarah"></trix-editor>
              </div>
              <div class="mb-3">
                  <label for="Location" class="form-labe @error('location')
                      is-invalid
                  @enderror">Location</label>
                  <input type="text" class="form-control" id="Location" name="location" value="{{ old('location', $edukasi->location) }}" required>
                  @error('location')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="Gambar" class="form-label @error('is-invalid') @enderror">Gambar</label>
                  <input type="hidden" name="oldGambar" value="{{ $edukasi->gambar }}" id="">
                  <input type="file" class="form-control" id="Gambar" name="gambar" value="{{ old('gambar' , $edukasi->gambar) }}">
                  @error('gambar')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="Jam" class="form-label @error('jam')
                      is-invalid
                  @enderror">Jam</label>
                  <input type="text" class="form-control" id="Jam" name="jam" value="{{ old('jam' , $edukasi->jam) }}" required>
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
                  <input type="text" class="form-control" id="Nomor Handphone" name="nomor_hp" value="{{ old('nomor_hp' , $edukasi->nomor_hp) }}" required>
                  @error('nomor_hp')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="ig" class="form-label @error('ig')
                      is-invalid
                  @enderror">Instagram</label>
                  <input type="text" class="form-control" id="ig" name="ig" value="{{ old('ig', $edukasi->ig) }}" required>
                  @error('ig')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="twt" class="form-label @error('twt')
                      is-invalid
                  @enderror">Twitter</label>
                  <input type="text" class="form-control" id="twt" name="twt" value="{{ old('twt' , $edukasi->twt) }}" required>
                  @error('twt')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="fb" class="form-label @error('fb')
                      is-invalid
                  @enderror">Facebook</label>
                  <input type="text" class="form-control" id="fb" name="fb" value="{{ old('fb', $edukasi->fb) }}" required>
                  @error('fb')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="maps" class="form-label @error('maps')
                      is-invalid
                  @enderror">Maps</label>
                  <input type="text" class="form-control" id="maps" name="maps" value="{{ old('maps' , $edukasi->maps)}}" required>
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
                  <input type="text" class="form-control" id="iframe" name="iframe" value="{{ old('iframe', $edukasi->iframe) }}" required>
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