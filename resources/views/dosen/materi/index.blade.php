@extends('dosen.template.main')

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
                    <a href="/materi/create" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Mata Kuliah</th>
                                    <th>Judul</th>
                                    <th>File</th>
                                    <th>Jenis</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Mata Kuliah</th>
                                    <th>Judul</th>
                                    <th>File</th>
                                    <th>Jenis</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($materi as $materi)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $materi->matkul_id }}</td>
                                    <td>{{ $materi->judul_materi }}</td>
                                    <td><a href="{{ $materi->file_materi }}">{{ $materi->judul_materi }}.pdf</a></td>
                                    <td>{{ $materi->jenis_materi }}</td>
                                    <td><a href="/dosen/materi/{{ $materi->id }}/edit"><i class="fas fa-edit"></i> Edit</a> | 
                                        <form action="/dosen/materi/{{ $materi->id }}" method="post" class="d-inline">
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