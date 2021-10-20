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
                <a href="/akune"> edit Pengguna</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/akunt" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <th>0</th>
                                    <th>nama</th>
                                    <th>*******</th>
                                    <th>Dosen/Mahasiswa/Admin</th>
                                    <td><a href="/akune"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr> 
                                <tr>
                                    <th>0</th>
                                    <th>nama</th>
                                    <th>*******</th>
                                    <th>Dosen/Mahasiswa/Admin</th>
                                    <td><a href="/akune"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr> 
                                <tr>
                                    <th>0</th>
                                    <th>nama</th>
                                    <th>*******</th>
                                    <th>Dosen/Mahasiswa/Admin</th>
                                    <td><a href="/akune"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr> 
                                <tr>
                                    <th>0</th>
                                    <th>nama</th>
                                    <th>*******</th>
                                    <th>Dosen/Mahasiswa/Admin</th>
                                    <td><a href="/akune"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr> 
                                <tr>
                                    <th>0</th>
                                    <th>nama</th>
                                    <th>*******</th>
                                    <th>Dosen/Mahasiswa/Admin</th>
                                    <td><a href="/akune"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
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