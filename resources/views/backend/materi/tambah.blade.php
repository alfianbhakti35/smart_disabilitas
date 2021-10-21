@extends('backend/template/main')

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
                    <form action="/materi_s" method="post" enctype="multipart/form-data">
                        @csrf
                       <div class="form-group">
                           <label for="matkul">Mata Kuliah</label>
                           <select class="form-control" name="matkul_id" id="matkul_id" >
                               <option value="">~ Pilih Mata kuliah ~</option>
                               <option value="1">Basis data</option>
                               <option value="2">Basis data</option>
                               <option value="3">Basis data</option>
                               <option value="4">Basis data</option>
                           </select>
                       </div>
                       <div class="form-group">
                           <label for="judul">Judul Materi</label>
                           <input type="text" name="judul_materi" id="judul_materi" placeholder="Mata Kuliah" class="form-control">
                       </div>
                        <div class="form-group">
                            <label for="file_m">File Materi</label>
                            <input type="file" name="file_materi" id="file_materi" placeholder="File Materi" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="jenis_m">Jenis Materi</label>
                            <input type="text" name="jenis_materi" id="jenis_materi" placeholder="Jenis Materi" class="form-control">
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