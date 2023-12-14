@extends('paw-admin.masteradmin')

@php
use Carbon\Carbon;
@endphp

@section('title', 'Form Add Appointments')

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
                    <h1>Form Tambah Data Appointments</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('pawcare.admindash') }}">Home</a></li>
                        <li class="breadcrumb-item active">Form Tambah Data Appointments</li>
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
                            <h3 class="card-title">Tambah Data Appointments</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('pawcare.prosesaddAppointments', $appointment->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="namaUser">Nama User</label>
                                    <p id="namaUser" class="form-control">{{ $appointment->nama_user }}</p>
                                    <input type="text" name="user_id" value="{{ $appointment->user_id }}" class="form-control" placeholder="{{ $appointment->nama_user }}" style="display: none;">
                                    <label for="namaKlinik">Nama Klinik</label>
                                    <p id="namaKlinik" class="form-control">{{ $appointment->nama_klinik }}</p>
                                    <input type="text" name="nama_klinik" value="{{ $appointment->nama_klinik }}" class="form-control" style="display: none;">
                                    <label for="kategori">Kategori</label>
                                    <p id="kategori" class="form-control">{{ $appointment->kategori }}</p>
                                    <input type="text" name="kategori" value="{{ $appointment->kategori }}" class="form-control" style="display: none;">
                                    <label for="waktuPertemuan">Waktu Pertemuan</label>
                                    <p id="waktuPertemuan" class="form-control">{{ $appointment->jadwal }}</p>
                                    <input type="text" name="jadwal" value="{{ $appointment->jadwal }}" class="form-control"  style="display: none;">
                                    <label for="tanggalPertemuan">Tanggal Pertemuan</label>
                                    <p id="tanggalPertemuan" class="form-control">{{ $appointment->tanggal_jadwal }}</p>
                                    <input type="date" name="tanggal_jadwal"  class="form-control" value="{{ $appointment->tanggal_jadwal }}" style="display: none;">
                                    <label for="komplain">Komplain</label>
                                    <textarea class="form-control" rows="3" name="complaint" id="komplain" readonly>{{ $appointment->complaint }}</textarea>
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="{{ $appointment->status }}" selected hidden>{{ $appointment->status }}</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Approved">Approved</option>
                                    </select>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#namaKlinik').change(function() {
            var klinikId = $(this).val();
            if (klinikId) {
                $.ajax({
                    type: "GET",
                    url: "{{ route('getJadwalByKlinik') }}",
                    data: {
                        klinik_id: klinikId
                    },
                    success: function(data) {
                        $('#waktuPertemuan').empty();
                        $.each(data, function(key, value) {
                            $('#waktuPertemuan').append('<option value="' + value.value + '">' + value.label + '</option>');
                        });
                    }
                });
            } else {
                $('#waktuPertemuan').empty();
            }
        });
    });
</script>

@endpush