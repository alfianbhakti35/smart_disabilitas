@extends('backend/template/main')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Program Study</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="fas fa-suitcase"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Program Study</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Program Study</h4>
                    <a href="/prodi_t" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Nama Program Study</th>
                                    <th>Kode</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nama Program Study</th>
                                    <th>Kode</th>                              
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Pemrograman Mobile</td>
                                    <td>PS001</td>
                                    <td><a href="/prodi_e"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr>  
                                <tr>
                                    <td>Pemrograman Mobile</td>
                                    <td>PS001</td>
                                    <td><a href="/prodi_e"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr>  
                                <tr>
                                    <td>Pemrograman Mobile</td>
                                    <td>PS001</td>
                                    <td><a href="/prodi_e"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr>  
                                <tr>
                                    <td>Pemrograman Mobile</td>
                                    <td>PS001</td>
                                    <td><a href="/prodi_e"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
                                </tr>  
                                <tr>
                                    <td>Pemrograman Mobile</td>
                                    <td>PS001</td>
                                    <td><a href="/prodi_e"><i class="fas fa-edit"></i> Edit</a> | <a class="text-danger" href=""><i class="fas fa-trash-alt"></i> Hapus</a></td>
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