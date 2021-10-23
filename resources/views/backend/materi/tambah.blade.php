@extends('backend.template.main')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Materi</h4>
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
                <a href="#">Tambah Materi</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/materi" class="btn btn-warning float-right"><i class="fas fa-angle-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <form method="post" action="/materi" enctype="multipart/form-data">
                        @csrf
                       <div class="form-group">
                           <label for="matkul">Mata Kuliah</label>
                           <select class="form-control @error('matkul_id') is-invalid @enderror" name="matkul_id" id="matkul_id" autofocus>
                            <option value="1">~ Pilih Jenis Materi ~</option>
                            @foreach ($matkul as $matkul)
                                @if (old('matkul_id') == $matkul->id)
                                <option value="{{ $matkul->id }}" selected>{{ $matkul->name }}</option>
                                @else
                                <option value="">~ Pilih Mata Kuliah ~</option>
                                <option value="{{ $matkul->id }}">{{ $matkul->name }}</option>
                                @endif
                            @endforeach
                           </select>
                           @error('matkul_id')
                               <div class="invalid-feedback">
                                   {{ $message }}
                               </div>
                           @enderror
                       </div>
                       <div class="form-group">
                           <label for="judul">Judul Materi</label>
                           <input type="text" name="judul_materi" id="judul_materi" placeholder="Judul Materi" class="form-control  @error('judul_materi') is-invalid @enderror" value="{{ old('judul_materi') }}">
                           @error('judul_materi')
                           <div class="invalid-feedback">
                               {{ $message }}
                           </div>
                            @enderror
                       </div>
                        <div class="form-group">
                            <label for="file_m">File Materi</label>
                            <input type="file" name="file_materi" id="file_materi" placeholder="File Materi" class="form-control @error('file_materi') is-invalid @enderror" value="{{ old('file_materi') }}">
                            @error('file_materi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="jenis_m">Jenis Materi</label>
                            <select class="form-control @error('jenis_materi') is-invalid @enderror" name="jenis_materi" id="jenis_materi">
                                @if (old('jenis_materi') == "Tuna Netra")
                                <option value="Tuna Netra" selected>Tuna Netra</option>
                                <option value="Tuna Rungu">Tuna Rungu</option>
                                <option value="Slow Learning">Slow Learning</option>
                                @elseif (old('jenis_materi') == "Tuna Rungu")                                
                                <option value="Tuna Netra">Tuna Rungu</option>
                                <option value="Tuna Rungu" selected>Tuna Rungu</option>
                                <option value="Slow Learning">Slow Learning</option>
                                @elseif (old('jenis_materi') == "Tuna Netra")
                                <option value="Tuna Netra">Tuna Netra</option>
                                <option value="Tuna Rungu">Tuna Rungu</option>
                                <option value="Slow Learning" selected>Slow Learning</option>
                                @else 
                                <option value="">~ Pilih Jenis Materi ~</option>
                                <option value="Tuna Netra">Tuna Netra</option>
                                <option value="Tuna Rungu">Tuna Rungu</option>
                                <option value="Slow Learning">Slow Learning</option>
                                @endif
                            </select>
                            @error('jenis_materi')
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