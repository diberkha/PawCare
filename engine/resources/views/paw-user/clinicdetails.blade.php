@extends('paw-user.master')

@php
    use Carbon\Carbon;
@endphp


@section('title', 'Paw Care')

@push('aditional-css')
<link rel="stylesheet" href="css/styleclinicdetails.css">
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
<section id="hospital-info">
    <div id="hospital-details">
        <img src="{{ asset('images/clinicpic/' . $klinik->images) }}" alt="Hospital Image" width="150">
        <div>
            <h2>{{$klinik->nama}}</h2>
            <p>{{$klinik->alamat}}</p>

            <div class="ratings">
                <i class="material-icons" style="color: #2164c9;">thumb_up</i>
                <span class="ratings-text">Rating : {{$klinik->rating}}</span>
                <i class="material-icons" style="color: #2164c9;">people</i>
                <span class="patients-info-text">{{$klinik->patients}}+ Patients</span>
            </div>

        </div>
    </div>
    <a id="scheduling-button" href="{{route('pawcare.appointment', $klinik->id)}}">Scheduling Now</a>
</section>

<section id="profile-section">
    <h3>Clinic Profile</h3>
    <p style="text-align: justify;">
        {{$klinik->profile}}
    </p>
</section>

<section id="schedule-section">
    <h3>Practice Schedule</h3>
    <ul class="list-jadwal">
        <br>
        <p>Monday - Saturday</p>
        @foreach($klinik->jamPraktik as $jamPraktik)
        <li>{{ Carbon::parse($jamPraktik->mulai)->format('H:i') }} - {{ Carbon::parse($jamPraktik->selesai)->format('H:i') }}</li>
        @endforeach
    </ul>
</section>

<div class="testimonials-container">
    <div class="testimonial">
        <div class="testimonial-header">
            <img src="images/bagas_1.png" alt="Customer 1">
            <h3>Bagas Ferdianto</h3>
            <div class="star-icon">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
        </div>
        <p class="testimonial-text" style="text-align:left;">
            "I can't express how much I love Paw Care! It keeps all my cat's medical history organized, sends vaccination reminders, and even suggests local pet-friendly events. It truly enhances the bond between pets and their owners. Five stars all the way!"
        </p>
    </div>

    <div class="testimonial">
        <div class="testimonial-header">
            <img src="images/berkha_1.png" alt="Customer 2">
            <h3>Diberkha Sajna</h3>
            <div class="star-icon">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <p class="testimonial-text">
            "Paw Care is the perfect blend of functionality and user-friendliness. From tracking my dog's weight to accessing nutritional tips, this app covers it all. The customer support is exceptional, making it an invaluable tool for pet owners seeking top-notch care for their furry friends."
        </p>
    </div>

    <div class="testimonial">
        <div class="testimonial-header">
            <img src="images/faiz_1.png" alt="Customer 2">
            <h3>Abdurrahman Faiz</h3>
            <div class="star-icon">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <p class="testimonial-text">
            "Paw Care is a lifesaver for busy pet owners like me. The ability to book vet appointments, order medications, and receive expert advice through the app is fantastic. It's a must-have for anyone serious about their pet's well-being."
        </p>
    </div>

    <div class="testimonial">
        <div class="testimonial-header">
            <img src="images/fian_1.png" alt="Customer 2">
            <h3>Afian Haris</h3>
            <div class="star-icon">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <p class="testimonial-text">
            "As a dog owner, Paw Care has become my go-to app for managing my pup's health. The intuitive interface makes it easy to monitor vaccinations, set grooming appointments, and even chat with vets when needed. It's like having a virtual pet care assistant in my pocket!"
        </p>
    </div>

    <div class="testimonial">
        <div class="testimonial-header">
            <img src="images/fatkhul_1.png" alt="Customer 2">
            <h3>Fatkhul Hadi</h3>
            <div class="star-icon">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <p class="testimonial-text">
            "Paw Care has been a game-changer for my fur babies! The convenience of scheduling vet appointments, tracking their health records, and receiving timely reminders has made pet care a breeze. I highly recommend this app to fellow pet parents."
        </p>
    </div>

</div>
@endsection