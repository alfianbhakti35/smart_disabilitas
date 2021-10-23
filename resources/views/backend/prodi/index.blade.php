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
                    <h4 class="card-title">Program Studi</h4>
                    <a href="/prodi/create" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fakultas</th>
                                    <th>Nama prodi</th>
                                    <th>Kode</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Fakultas</th>
                                    <th>Nama prodi</th>
                                    <th>Kode</th>                              
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($prodi as $prodi)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $prodi->fakultas_id}}</td>
                                    <td>{{ $prodi->nama }}</td>
                                    <td>{{ $prodi->kode }}</td>
                                    <td><a href="/prodi/{{ $prodi->id }}/edit"><i class="fas fa-edit"></i> Edit</a> | 
                                        <form action="/prodi/{{ $prodi->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="text-danger bg-transparent border-0" onclick="return confirm('Yakin ingin mengahpus?')"><i class="fas fa-trash-alt"></i> Hapus</button>
                                        </form>
                                </tr>   
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 