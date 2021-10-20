@extends('backend/template/main')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Pengguna</h4>
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
                <a href="#">Edit Pengguna</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/pengguna" class="btn btn-warning float-right"><i class="fas fa-angle-left">Kembali</i></a>
                </div>
                <div class="card-body">
                   <form action="" method="POST">
                       <div class="form-group">
                           <label for="">User id</label>
                           <input type="text" name="user_id" id="" placeholder="User Id" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="">Nama</label>
                           <input type="text" name="nama" id="" placeholder="Nama" class="form-control">
                       </div>
                       <div class="form-group">
                            <label>Gender</label><br/>
                            <label class="form-radio-label">
                                <input class="form-radio-input" type="radio" name="optionsRadios" value=""  checked="">
                                <span class="form-radio-sign">Male</span>
                            </label>
                            <label class="form-radio-label ml-3">
                                <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                                <span class="form-radio-sign">Female</span>
                            </label>
                    </div>
                       <div class="form-group">
                           <label for="">NIM</label>
                           <input type="number" name="nim" id="" placeholder="NIM" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="">TTL</label>
                           <input type="date" name="ttl" id="" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="">Alamat</label>
                           <textarea name="alamat" class="form-control" id="" cols="30" rows="10"></textarea>
                       </div>
                       <div class="form-group">
                           <label for="">Nama Fakultas</label>
                           <input type="text" name="" placeholder="Nama Fakultas" class="form-control" id="">
                       </div>
                       <div class="form-group">
                           <label for="">Nama Prodi</label>
                           <input type="text" name="nama_prodi" placeholder="Nama Prodi" class="form-control" id="">
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