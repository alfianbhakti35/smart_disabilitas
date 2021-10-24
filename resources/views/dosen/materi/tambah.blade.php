@extends('dosen.template.main')

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
                    <a href="/dosen/materi" class="btn btn-warning float-right"><i class="fas fa-angle-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <form method="post" action="/dosen/materi" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="matkul">Mata Kuliah</label>
                            <select class="form-control @error('matkul_id') is-invalid @enderror" name="matkul_id" id="matkul_id" autofocus>
                             <option value="">~ Pilih Mata Kuliah ~</option>
                             @foreach ($matkul as $matkul)
                                 @if (old('matkul_id') == $matkul->id)
                                 <option value="{{ $matkul->id }}" selected>{{ $matkul->nama }}</option>
                                 @else
                                 <option value="{{ $matkul->id }}">{{ $matkul->nama }}</option>
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
                             <label for="materi_tunanetra">Materi Tuna Netra</label>
                             <input type="file" name="materi_tunanetra" id="materi_tunanetra" placeholder="Audio Materi" class="form-control @error('materi_tunanetra') is-invalid @enderror" value="{{ old('materi_tunanetra') }}">
                             <p>*Materi Audio</p>
                             @error('materi_tunanetra')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                         @enderror
                         </div>
                         <div class="form-group">
                             <label for="materi_tunarungu">Materi Tuna Rungu</label>
                             <input type="file" name="materi_tunarungu" id="materi_tunarungu" placeholder="Video Materi" class="form-control @error('materi_tunarungu') is-invalid @enderror" value="{{ old('materi_tunarungu') }}">
                             <p>*Materi PDF</p>
                             @error('materi_tunarungu')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                         @enderror
                         </div>
                         <div class="form-group">
                             <label for="materi_slowlearning">Slow Learning</label>
                             <input type="text" name="materi_slowlearning" id="materi_slowlearning" placeholder="Url Video" class="form-control  @error('materi_slowlearning') is-invalid @enderror" value="{{ old('materi_slowlearning') }}">
                             @error('materi_slowlearning')
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