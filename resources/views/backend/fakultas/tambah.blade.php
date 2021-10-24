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
                    <form method="post" action="/fakultas" enctype="multipart/form-data">
                        @csrf
                       <div class="form-group">
                           <label for="nama">Nama</label>
                           <input type="text" name="nama" id="nama" placeholder="nama fakultas" class="form-control  @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                           @error('nama')
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