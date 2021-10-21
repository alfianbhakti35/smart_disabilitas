@extends('backend/template/main')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Kelas</h4>
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
                <a href="/kelase">Edit Kelas</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/kelas" class="btn btn-warning float-right"><i class="fas fa-angle-left">Kembali</i></a>
                </div>
                <div class="card-body">
                   <form action="" method="POST">
                       <div class="form-group">
                           <label for="">Nama</label>
                           <input type="text" name="nama" id="" placeholder="Nama" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="">Semester</label>
                           <input type="number" name="semester" placeholder="Semester" class="form-control" id="">
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