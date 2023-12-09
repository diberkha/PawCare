@extends('paw-user.masternofooter')

@section('title', 'Paw Care - Make an Appointment')

@push('aditional-css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="css/styleappointment.css">
@endpush

@section('content')
<div>
    <div class="section-title">Choose Your Beloved Pet</div>
    <div class="section-paragraph">Choose the one that suits your pet!!!</div>
</div>

<section>
    <figure>
        <img src="images/gallery-1.jpg" alt="Cat Image">
        <figcaption>Cat</figcaption>
        <p><a href="next_page_cat.html">Next ></a></p>
    </figure>

    <figure>
        <img src="images/gallery-123.png" alt="Dog Image">
        <figcaption>Dog</figcaption>
        <p><a href="next_page_dog.html">Next ></a></p>
    </figure>
</section>
@endsection

@push('aditional-js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush