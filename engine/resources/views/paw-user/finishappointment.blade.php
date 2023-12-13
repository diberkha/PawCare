@extends('paw-user.masternofooter')

@section('title', 'Paw Care - Make an Appointment')

@push('aditional-css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="css/style-pawcare.css">
@endpush

@section('content')
<div class="container mt-5 mb-5 text-center">
    <img src="images/finish.png" alt="Finish Image" class="img-fluid" width="250">
    <h2 class="mt-3">Congratulations!</h2>
    <p class="text-muted">
        You have successfully made an appointment with the related clinic. <br>
        Now check your appointment status!
    </p>
    <a href="{{route('pawcare.activity')}}" class="btn btn-dark mt-3">See your activity</a>
</div>
@endsection

@push('aditional-js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush