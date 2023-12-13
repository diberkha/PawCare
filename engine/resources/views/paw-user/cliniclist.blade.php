@extends('paw-user.master')

@php
    use Carbon\Carbon;
@endphp


@section('title', 'Paw Care')

@push('aditional-css')
<link rel="stylesheet" href="css/stylecliniclist.css">
<link rel="stylesheet" href="css/stylehome2.css">
<!-- Link ke file CSS Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Link ke Material Icons -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@endpush

@push('aditional-js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endpush

@section('content')
<header>
    <h1>Make appointments to meet easily</h1>
</header>

<div class="article-container">
    <article>
        With Paw Care, scheduling veterinary consultations for your pets has never been easier. Meet top-notch veterinarians without hassle and provide the best care for your pet's health and well-being. Easily set up appointments, choose specialists, and get expert advice without leaving the comfort of your home.
    </article>
</div>

<div class="location-search-container">
    <button class="location-button">
        <img src="images/clinicpic/map.png" alt="Map Icon">
        <span>All Locations</span>
    </button>

    <div class="search-section">
        <input type="text" placeholder="Enter address...">
    </div>

    <div class="search-button-section">
        <button><img src="https://img.icons8.com/ios/452/search--v1.png" alt="Search Icon" class="search-icon">Search</button>
    </div>
</div>

<hr>

<div class="container1">
    <!-- Bagian Kiri: Pilihan Kota -->
    <div class="city-section">
        <h2>Select Your City</h2>
        <ul>
            <li><label><input type="radio" name="city" value="city1"> Use My Location</label></li>
            <li><label><input type="radio" name="city" value="city1"> Surakarta</label></li>
            <li><label><input type="radio" name="city" value="city2"> Surabaya</label></li>
            <li><label><input type="radio" name="city" value="city3"> Yogyakarta</label></li>
            <li><label><input type="radio" name="city" value="city3"> Semarang</label></li>
            <li><label><input type="radio" name="city" value="city3"> Malang</label></li>
            <!-- Tambahkan lebih banyak kota sesuai kebutuhan -->
        </ul>
    </div>

    <!-- Bagian Kanan: List Rumah Sakit Hewan -->
    <div class="hospital-section">
        @foreach($kliniks as $klinik)
        <div class="hospital-item">
            <div class="left-section">
                <div class="upper-left">
                    <img src="{{ asset('images/clinicpic/' . $klinik->images) }}" alt="Hospital">
                    <div class="hospital-info">
                        <h3>{{$klinik->nama}}</h3>
                        <p>{{$klinik->alamat}}</p>
                    </div>
                </div>
                <div class="lower-left">
                    <p style="color: red;">This Clinic Slots Are Running Out Soon</p>
                    <p style="color: rgb(43, 255, 0);">
                        Practice Schedule: 
                        @foreach($klinik->jamPraktik as $jamPraktik)
                        {{ Carbon::parse($jamPraktik->mulai)->format('H:i') }} - {{ Carbon::parse($jamPraktik->selesai)->format('H:i') }}
                        @unless($loop->last), @endunless
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="right-section">
                <div class="rating">
                    <p>Rating: {{$klinik->rating}}/5</p>
                </div>
                <div class="cost">
                    <p>Average Cost : Rp{{$klinik->harga_rata2}}</p>
                </div>
                <button class="appointment-button" onclick="location.href=`{{route('pawcare.clinicdetails', $klinik->id)}}`">Scheduling</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection