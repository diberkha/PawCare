@extends('paw-admin.masteradmin')

@section('title', 'Form Add Klinik')

@section('preloader')
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Data Klinik</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('pawcare.admindash') }}">Home</a></li>
                        <li class="breadcrumb-item active">Form Edit Data Klinik</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Klinik</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('pawcare.updateKlinik', $klinik->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="namaKlinik">Nama Klinik</label>
                                    <input type="text" class="form-control" id="namaKlinik" name="nama" value="{{$klinik->nama}}" required>
                                    <label for="alamatKlinik">Alamat Klinik</label>
                                    <input type="text" class="form-control" id="alamatKlinik" name="alamat" value="{{$klinik->alamat}}" required>
                                    <label for="profileKlinik">Profile Singkat</label>
                                    <textarea class="form-control" id="profileKlinik" name="profile" rows="4" cols="50" required>{{$klinik->profile}}</textarea>
                                    <img src="{{ asset('images/clinicpic/' . $klinik->images) }}" alt="klinikimage">
                                    <label for="images">Upload Gambar :</label>
                                    <input type="file" class="form-control" id="images" name="images">
                                    <label for="rating">Rating</label>
                                    <input type="number" name="rating" class="form-control" id="rating" step="0.1" min="0" max="5" placeholder="Masukkan rating (0.0 - 5.0)" value="{{$klinik->rating}}" required>
                                    <label for="hargaRata2">Harga Rata-rata</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="number" name="harga_rata2" id="hargaRata2" class="form-control" placeholder="Enter Harga Rata-rata Pembuatan Janji" value="{{$klinik->harga_rata2}}" required>
                                    </div>
                                    <label for="patients">Jumlah Pasien</label>
                                    <input type="number" name="patients" id="patients" class="form-control" placeholder="Enter Jumlah Pasien Saat Ini" value="{{$klinik->patients}}" required>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@push('aditional-css')
<link rel="stylesheet" href="path-to-aditional-css.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
@endpush

@push('aditional-js')
<script src="path-to-aditional-script.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>
@endpush