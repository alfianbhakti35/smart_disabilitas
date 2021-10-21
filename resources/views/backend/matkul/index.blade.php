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
                <a href="#"> Edit Mata Kuliah</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/matkul_t" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Kode</th>
                                    <th>Dosen</th>
                                    <th>Program Studi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nama</th>
                                    <th>Kode</th>
                                    <th>Dosen</th>
                                    <th>Program Studi</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Orang</td>
                                    <td>1</td>
                                    <td>jupri</td>
                                    <td>Teknik Informatika</td>
                                    <td><a href="/matkul_e"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr> 
                                <tr>
                                    <td>Orang</td>
                                    <td>1</td>
                                    <td>jupri</td>
                                    <td>Teknik Informatika</td>
                                    <td><a href="/matkul_e"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr> 
                                <tr>
                                    <td>Orang</td>
                                    <td>1</td>
                                    <td>jupri</td>
                                    <td>Teknik Informatika</td>
                                    <td><a href="/matkul_e"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr> 
                                <tr>
                                    <td>Orang</td>
                                    <td>1</td>
                                    <td>jupri</td>
                                    <td>Teknik Informatika</td>
                                    <td><a href="/matkul_e"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr> 
                                <tr>
                                    <td>Orang</td>
                                    <td>1</td>
                                    <td>jupri</td>
                                    <td>Teknik Informatika</td>
                                    <td><a href="/matkul_e"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr> 
                                <tr>
                                    <td>Orang</td>
                                    <td>1</td>
                                    <td>jupri</td>
                                    <td>Teknik Informatika</td>
                                    <td><a href="/matkul_e"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr> 
                                <tr>
                                    <td>Orang</td>
                                    <td>1</td>
                                    <td>jupri</td>
                                    <td>Teknik Informatika</td>
                                    <td><a href="/matkul_e"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr> 
                                <tr>
                                    <td>Orang</td>
                                    <td>1</td>
                                    <td>jupri</td>
                                    <td>Teknik Informatika</td>
                                    <td><a href="/matkul_e"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr> 
                                <tr>
                                    <td>Orang</td>
                                    <td>1</td>
                                    <td>jupri</td>
                                    <td>Teknik Informatika</td>
                                    <td><a href="/matkul_e"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr> 
                                <tr>
                                    <td>Orang</td>
                                    <td>1</td>
                                    <td>jupri</td>
                                    <td>Teknik Informatika</td>
                                    <td><a href="/matkul_e"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr> 
                                <tr>
                                    <td>Orang</td>
                                    <td>1</td>
                                    <td>jupri</td>
                                    <td>Teknik Informatika</td>
                                    <td><a href="/matkul_e"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr>                                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection