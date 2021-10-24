@extends('backend.template.main')

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
                    <a href="/matkul/create" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Dosen</th>
                                    <th>Program Studi</th>
                                    <th>Semester</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Dosen</th>
                                    <th>Program Studi</th>
                                    <th>Semester</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($matkul as $matkul)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $matkul->nama }}</td>
                                    @foreach ($user as $u)
                                        @if ($u->id == $matkul->user_id)
                                        <td>{{ $u->name }}</td>
                                        @endif
                                    @endforeach
                                    @foreach ($prodi as $p)
                                        @if ($p->id == $matkul->prodi_id)
                                        <td>{{ $p->nama }}</td>
                                        @endif
                                    @endforeach
                                    <td>{{ $matkul->semester }}</td>
                                    <td><a href="/matkul/{{ $matkul->id }}/edit"><i class="fas fa-edit"></i> Edit</a> | 
                                        <form action="/matkul/{{ $matkul->id }}" method="post" class="d-inline">
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