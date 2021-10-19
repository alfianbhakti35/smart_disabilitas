@include('backend.template.main')

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
                    <button class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</button>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                       <div class="form-group">
                           <label for="matkul">Mata Kuliah</label>
                           <select name="matkul" id="">
                               <option value="">~ Pilih Mata kuliah ~</option>
                               <option value="">Basis data</option>
                               <option value="">Basis data</option>
                               <option value="">Basis data</option>
                               <option value="">Basis data</option>
                           </select>
                           <input type="text" name="matkul" id="" placeholder="Mata Kuliah">
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection