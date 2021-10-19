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
                <a href="#">Materi</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Materi</h4>
                    <a href="/materi_t" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Mata Kuliah</th>
                                    <th>Judul</th>
                                    <th>File</th>
                                    <th>Jenis</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Mata Kuliah</th>
                                    <th>Judul</th>
                                    <th>File</th>
                                    <th>Jenis</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Basis Data</td>
                                    <td>Dasar Basis Data</td>
                                    <td>dasar.pdf</td>
                                    <td>pdf</td>
                                    <td><a href=""><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr>
                                <tr>
                                    <td>Basis Data</td>
                                    <td>Dasar Basis Data</td>
                                    <td>dasar.pdf</td>
                                    <td>pdf</td>
                                    <td><a href=""><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr>
                                <tr>
                                    <td>Basis Data</td>
                                    <td>Dasar Basis Data</td>
                                    <td>dasar.pdf</td>
                                    <td>pdf</td>
                                    <td><a href=""><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr>
                                <tr>
                                    <td>Basis Data</td>
                                    <td>Dasar Basis Data</td>
                                    <td>dasar.pdf</td>
                                    <td>pdf</td>
                                    <td><a href=""><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr>
                                <tr>
                                    <td>Basis Data</td>
                                    <td>Dasar Basis Data</td>
                                    <td>dasar.pdf</td>
                                    <td>pdf</td>
                                    <td><a href=""><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr>
                                <tr>
                                    <td>Basis Data</td>
                                    <td>Dasar Basis Data</td>
                                    <td>dasar.pdf</td>
                                    <td>pdf</td>
                                    <td><a href=""><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr>     
                                <tr>
                                    <td>Basis Data</td>
                                    <td>Dasar Basis Data</td>
                                    <td>dasar.pdf</td>
                                    <td>pdf</td>
                                    <td><a href=""><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr>
                                <tr>
                                    <td>Basis Data</td>
                                    <td>Dasar Basis Data</td>
                                    <td>dasar.pdf</td>
                                    <td>pdf</td>
                                    <td><a href=""><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr>       
                                <tr>
                                    <td>Basis Data</td>
                                    <td>Dasar Basis Data</td>
                                    <td>dasar.pdf</td>
                                    <td>pdf</td>
                                    <td><a href=""><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr>
                                <tr>
                                    <td>Basis Data</td>
                                    <td>Dasar Basis Data</td>
                                    <td>dasar.pdf</td>
                                    <td>pdf</td>
                                    <td><a href=""><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr>
                                <tr>
                                    <td>Basis Data</td>
                                    <td>Dasar Basis Data</td>
                                    <td>dasar.pdf</td>
                                    <td>pdf</td>
                                    <td><a href=""><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
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