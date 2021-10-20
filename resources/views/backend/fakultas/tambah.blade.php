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
                <a href="#">Tambah Fakultas</a>
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
                    <form action="" method="post">
                       <div class="form-group">
                           <label for="fakultas">Fakultas</label>
                       </div>
                       <div class="form-group">
                           <label for="judul">Nama Fakultas </label>
                           <input type="text" name="fakultas" id="" placeholder="Nama Fakultas" class="form-control">
                       </div>
                       <div class="form-group">
                        <label for="judul">Kode </label>
                        <input type="text" name="fakultas" id="" placeholder="Kode Fakultas" class="form-control">
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