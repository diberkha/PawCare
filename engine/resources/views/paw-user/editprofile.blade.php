@extends('paw-user.masternofooter')

@section('title', 'PawCare - Edit Profile')

@method('GET')

@push('aditional-css')
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link rel="stylesheet" href="css/style-pawcare.css">
@endpush

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="font-weight-bold mb-4">Edit Profile</h2>
            <form action="{{route('pawcare.updateprofile')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Full Name</h6>
                                <input type="text" class="form-control mb-2" value="{{auth()->user()->name}}" name="name">
                            </div>
                            <div class="col-md-12">
                                <h6>Country</h6>
                                <select class="form-control mb-2" name="country">
                                    <option value="{{auth()->user()->country}}" selected hidden>{{auth()->user()->country}}</option>
                                    <option value="Indonesia">Indonesia</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <h6>Image</h6>
                                <div class="custom-file mb-2">
                                    <input type="file" class="custom-file-input" id="profileImage" accept=".jpg, .jpeg, .png" name="foto">
                                    <label class="custom-file-label" for="profileImage">Choose file</label>
                                    <small>Maximum file size 3MB - acceptable file types .jpg, .jpeg, .png.</small>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark mt-3" id="submit">Save Changes</button>
            </form>

            <!-- Border Line -->
            <hr class="my-4">

            <div class="row align-items-center">
                <!-- Left Column -->
                <div class="col-md-6">
                    <h5 class="mb-4">Credentials</h5>
                    <div class="col-md-12">
                        <h6>Email <span class="text-danger">*</span></h6>
                        <p class="form-control-static mb-2">{{auth()->user()->email}}</p>
                        <p>You can't change your email because you have connected your Google account.</p>
                    </div>
                    @if(empty(auth()->user()->email_verified_at))
                    <div class="col-md-12">
                        <p>Your email hasn't been verified yet.</p>
                        <a href="{{ route('verification.send') }}" class="btn btn-dark mt-3">Verify Now</a>
                    </div>
                    @endif
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="col-md-12 mt-3">
                        <h6>Connected Apps</h6>
                        <div>
                            <i class="fab fa-google"></i> Google
                            <a href="https://accounts.google.com" class="ml-2">Disconnect</a>
                        </div>
                        <div>
                            <i class="fab fa-linkedin"></i> LinkedIn
                            <a href="https://www.linkedin.com/login" class="ml-2">Connect your account</a>
                        </div>
                        <div>
                            <i class="fas fa-video"></i> Zoom
                            <a href="https://zoom.us/signin" class="ml-2">Connect your account</a>
                        </div>
                    </div>
                </div>
            </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
<script src="js/changename.js"></script>
@endpush