@extends('backend/template/main')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Program Study</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="fas fa-suitcase"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Edit Program Study</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/prodi" class="btn btn-warning float-right"><i class="fas fa-angle-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <form method="post" action="/prodi/{{ $prodi->id }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="fakultas">Fakultas</label>
                            <select class="form-control @error('fakultas_id') is-invalid @enderror" name="fakultas_id" id="fakultas_id" autofocus>
                                <option value="">~ Pilih Fakultas ~</option>
                            @foreach ($fakultas as $fakultas)
                                 @if (old('fakultas_id', $fakultas->nama)) == $fakultas->id)
                                 <option value="{{ $fakultas->id }}" selected>{{ $fakultas->nama }}</option>
                                 @else
                                 <option value="{{ $fakultas->id }}">{{ $fakultas->nama }}</option>
                                 @endif
                             @endforeach
                            </select>
                            @error('fakultas_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                       <div class="form-group">
                           <label for="nama">nama program studi</label>
                           <input type="text" name="nama" id="nama" placeholder="nama prodi" class="form-control  @error('nama') is-invalid @enderror" value="{{ old('nama', $prodi->nama) }}">
                           @error('nama')
                           <div class="invalid-feedback">
                               {{ $message }}
                           </div>
                            @enderror
                       </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-danger">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection