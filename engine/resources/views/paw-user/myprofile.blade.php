@extends('paw-user.masternofooter')

@section('title', 'PawCare - My Profile')

@push('aditional-css')
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- External CSS -->
<link rel="stylesheet" href="css/style-pawcare.css">
@endpush

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="font-weight-bold mb-4">My Profile</h3>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @if (empty(auth()->user()->foto))
                        <div class="col-md-2 mb-4 text-center">
                            <img src="images/userprofilepic/random.jpg" alt="Profile Picture" class="img-fluid rounded-circle">
                        </div>
                        @endif
                        @if (!empty(auth()->user()->foto))
                        <div class="col-md-3 mb-4 text-center">
                            <img src="{{ asset('images/userprofilepic/' . auth()->user()->foto) }}" alt="Profile Picture" class="img-fluid rounded-circle">
                        </div>
                        @endif
                        <div class="col-md-9">
                            <h6>{{auth()->user()->name}}</h6>
                            <p>+62 {{auth()->user()->phoneNumber}}</p>
                        </div>
                        <div class="col-md-12">
                            <h6>Full Name</h6>
                            <p class="text-muted text-right border-bottom pb-2">{{auth()->user()->name}}</p>
                        </div>
                        <div class="col-md-12">
                            <h6>Email</h6>
                            <p class="text-muted text-right border-bottom pb-2">{{auth()->user()->email}}</p>
                        </div>
                        <div class="col-md-12">
                            <h6>Phone Number</h6>
                            <p class="text-muted text-right border-bottom pb-2">+62 {{auth()->user()->phoneNumber}}</p>
                        </div>
                        <div class="col-md-12">
                            <h6>Country</h6>
                            <p class="text-muted text-right border-bottom pb-2">{{auth()->user()->country}}</p>
                        </div>
                    </div>
                    <a href="{{ route('pawcare.editprofile') }}" class="btn btn-dark mt-3 float-right">Edit Profile</a>
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