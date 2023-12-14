@extends('paw-user.masternofooter')

@section('title', 'PawCare - Make an Appointment')

@push('aditional-css')
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link rel="stylesheet" href="css/style-pawcare.css">
@endpush

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3 class="text-center">Pet Owner's Biodata</h3>
            <p class="text-muted text-center">Information related to appointment will be sent to the phone number
                and email below.</p>
            <div class="card">
                <div class="card-body text-center">
                    <div class="col-md-12 text-center">
                        <h6>Phone Number</h6>
                        <p>+62 {{auth()->user()->phoneNumber}}</p>
                    </div>
                    <div class="col-md-12 text-center">
                        <h6>Email</h6>
                        <p>{{auth()->user()->email}}</p>
                    </div>
                    <div class="col-md-12 text-center">
                        <h6>Full Name</h6>
                        <p>{{auth()->user()->name}}</p>
                    </div>
                    <a href="{{route('pawcare.cliniclist')}}" class="btn btn-dark btn-block mt-3 float-right">Next</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('aditional-js')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endpush