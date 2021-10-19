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
                <a href="#">Edit Materi</a>
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
                    <form action="" method="post">
                       <div class="form-group">
                           <label for="matkul">Mata Kuliah</label>
                           <select class="form-control" name="matkul" id="" >
                               <option value="">~ Pilih Mata kuliah ~</option>
                               <option value="">Basis data</option>
                               <option value="">Basis data</option>
                               <option value="">Basis data</option>
                               <option value="">Basis data</option>
                           </select>
                       </div>
                       <div class="form-group">
                           <label for="judul">Judul Materi</label>
                           <input type="text" name="matkul" id="" placeholder="Mata Kuliah" class="form-control">
                       </div>
                        <div class="form-group">
                            <label for="file_m">File Materi</label>
                            <input type="file" name="file_m" id="" placeholder="File Materi" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="jenis_m">Jenis Materi</label>
                            <input type="text" name="jenis_m" id="" placeholder="Jenis Materi" class="form-control">
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