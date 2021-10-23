@extends('backend/template/main')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Fakultas</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="fas fa-university"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Edit Fakultas</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/fakultas" class="btn btn-warning float-right"><i class="fas fa-angle-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <form method="post" action="/fakultas/{{ $fakultas->id }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="fakultas">Fakultas</label>
                            <select class="form-control @error('fakultas_id') is-invalid @enderror" name="fakultas_id" id="fakultas_id" autofocus>
                                <option value="">~ Pilih Fakultas ~</option>
                            @foreach ($fakultas as $fakultas)
                                 @if (old('fakultas_id') == $fakultas->id)
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
                           <label for="nama">nama fakultas</label>
                           <input type="text" name="nama" id="nama" placeholder="nama fakultas" class="form-control  @error('nama') is-invalid @enderror" value="{{ old('nama', $fakultas->nama) }}">
                           @error('nama')
                           <div class="invalid-feedback">
                               {{ $message }}
                           </div>
                            @enderror
                       </div>
                       <div class="form-group">
                            <label for="kode">kode</label>
                            <input type="text" name="kode" id="kode" placeholder="kode" class="form-control  @error('kode') is-invalid @enderror" value="{{ old('kode', $fakultas->kode) }}">
                            @error('kode')
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