@extends('paw-user.masternofooter')

@section('title', 'PawCare - Pet`s Biodata')

@push('aditional-css')
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link rel="stylesheet" href="css/style-pawcare.css">
@endpush

@section('content')
<div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Pet's Biodata</h3>
                        <p class="text-muted text-center">Fill in the pet's biodata truthfully.</p>
                        <div class="col-md-13">
                            <h6>Pet's Name</h6>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-13">
                            <h6>Pet's Age</h6>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-13">
                            <h6>Pet's Special Needs</h6>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-md-13">
                            <h6>Pet's Complaint</h6>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button class="btn btn-dark btn-block mt-3">Submit</button>
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