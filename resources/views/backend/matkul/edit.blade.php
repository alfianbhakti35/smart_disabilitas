@extends('backend/template/main')

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
                <a href="/matkul_e">Edit Mata Kuliah</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/matkul" class="btn btn-warning float-right"><i class="fas fa-angle-left">Kembali</i></a>
                </div>
                <div class="card-body">
                   <form action="" method="POST">
                       <div class="form-group">
                           <label for="">Nama</label>
                           <input type="text" name="nama" id="" placeholder="Nama" class="form-control">
                       </div>
                       <div class="form-group">
                        <label for="">Kode</label>
                        <input type="text" name="Kode" id="" placeholder="Kode" class="form-control">
                        </div>
                       <div class="form-group">
                           <label for="">Dosen</label>
                           <input type="text" name="dosen" placeholder="Nama Dosen" class="form-control" id="">
                       </div>
                       <div class="form-group">
                           <label for="">Program Studi</label>
                           <input type="text" name="nama_prodi" placeholder="Nama Program Studi" class="form-control" id="">
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