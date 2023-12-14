@extends('paw-user.masternofooter')

@php
use Carbon\Carbon;
@endphp

@section('title', 'Paw Care - Make an Appointment')

@push('aditional-css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="css/style-pawcare.css">
<link rel="stylesheet" href="css/style-radio.css">
@endpush

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Appointment's Form</h3>
                    <p class="text-muted text-center">Fill in the form truthfully.</p>
                    <form action="{{route('pawcare.createappointment')}}" id="quickForm" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-13">
                            <h6>Nama Klinik</h6>
                            <p id="namaKlinik" class="form-control">{{ $klinik->nama }}</p>
                            <input type="text" name="nama_klinik" value="{{ $klinik->nama }}" class="form-control" style="display: none;">
                        </div>
                        <div class="col-md-12" id="radioContainer">
                            <label for="option1" class="radioLabel">
                                <img src="images/gallery-7.jpg" alt="Dog" height="150" width="150" id="imgDog">
                                <input type="radio" id="option1" name="kategori" value="Dog">
                                Dog
                            </label>

                            <label for="option2" class="radioLabel">
                                <img src="images/gallery-1.jpg" alt="Cat" height="150" width="150" id="imgCat">
                                <input type="radio" id="option2" name="kategori" value="Cat">
                                Cat
                            </label>
                        </div>

                        <div class="col-md-13">
                            <h6>Pet's Complaint</h6>
                            <textarea class="form-control" rows="3" name="complaint"></textarea>
                        </div>
                        <div class="col-md-13">
                            <h6>Date</h6>
                            <input type="date" name="tanggal_jadwal" id="" class="form-control">
                        </div>
                        <div class="col-md-13">
                            <h6>Schedule</h6>
                            <select name="jadwal" id="" class="form-control">
                                <option value="" selected hidden>Choose Schedule</option>
                                @foreach($klinik->jamPraktik as $jamPraktik)
                                <option value="{{Carbon::parse($jamPraktik->mulai)->format('H:i')}} - {{Carbon::parse($jamPraktik->selesai)->format('H:i')}}">{{Carbon::parse($jamPraktik->mulai)->format('H:i')}} - {{Carbon::parse($jamPraktik->selesai)->format('H:i')}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-dark btn-block mt-3" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('aditional-js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush