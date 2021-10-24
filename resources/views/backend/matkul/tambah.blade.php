@extends('backend.template.main')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Mata Kuliah</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Edit Mata Kuliah</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/matkul" class="btn btn-warning float-right"><i class="fas fa-angle-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <form method="post" action="/matkul" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" placeholder="Nama mata kuliah" class="form-control  @error('nama') is-invalid @enderror" value="{{ old('nama') }}" autofocus>
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="user">Dosen</label>
                            <select class="form-control @error('user_id') is-invalid @enderror" name="user_id" id="user_id">
                                <option value="">~ Pilih dosen ~</option>
                            @foreach ($user as $user)
                                @if ($user->level == 'dosen')
                                    @if (old('user_id') == $user->id)
                                    <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                                    @else
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endif    
                                @endif
                            @endforeach
                            </select>
                            @error('user_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="prodi">Program studi</label>
                            <select class="form-control @error('prodi_id') is-invalid @enderror" name="prodi_id" id="prodi_id">
                                <option value="">~ Pilih program studi ~</option>
                            @foreach ($prodi as $prodi)
                                @if (old('prodi_id') == $prodi->id)
                                <option value="{{ $prodi->id }}" selected>{{ $prodi->nama }}</option>
                                @else
                                <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                                @endif    
                            @endforeach
                            </select>
                            @error('prodi_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <input type="number" name="semester" id="semester" placeholder="semester" min="1" max="8" class="form-control  @error('semester') is-invalid @enderror" value="{{ old('semester') }}" autofocus>
                            @error('semester')
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