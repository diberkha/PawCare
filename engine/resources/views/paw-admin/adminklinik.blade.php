@extends('paw-admin.masteradmin')

@section('title', 'Klinik Admin')

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
            <h1>Daftar Klinik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('pawcare.admindash') }}">Home</a></li>
              <li class="breadcrumb-item active">Daftar Klinik</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Klinik</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                    <a href="{{ route('pawcare.addKlinik') }}" class="btn btn-primary mb-3">Tambah Klinik</a>
                    <table class="table table-bordered">
                        <thead>
                        <?php $no=1; ?>
                        <tr>
                            <th>No</th>
                            <th>Nama Klinik</th>
                            <th>Alamat</th>
                            <th>Profile</th>
                            <th>Gambar</th>
                            <th>Rating</th>
                            <th>Harga Rata-rata</th>
                            <th>Patients</th>
                            <th>Tools</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kliniks as $klinik)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $klinik->nama }}</td>
                            <td>{{ $klinik->alamat }}</td>
                            <td>{{ $klinik->profile }}</td>
                            <td><img src="{{ asset('images/clinicpic/' . $klinik->images) }}" alt="klinikimage" height="200" width="200"></td>
                            <td>{{ $klinik->rating }}</td>
                            <td>Rp. {{ $klinik->harga_rata2 }}</td>
                            <td>{{ $klinik->patients }}</td>
                            <td>
                                <a href="{{route('pawcare.editKlinik', $klinik->id)}}" class="btn btn-warning">Edit</a>
                                <form onsubmit="return confirm('Apakah Anda Yakin?');"
                                action="{{route('pawcare.destroyKlinik', $klinik->id)}}" method="post"
                                style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php $no++; ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection


@push('aditional-css')
  <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
@endpush

@push('aditional-js')
    <script src="path-to-aditional-script.js"></script>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
@endpush