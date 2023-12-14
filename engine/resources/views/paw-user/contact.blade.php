@extends('paw-user.masteruser')

@section('title', 'Paw Care')

@push('aditional-css')
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">


<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/jquery.timepicker.css">

<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/stylehome.css">
<style>
    .material-icons {
    background-color: white; /* Ubah latar belakang menjadi putih */
    border-radius: 50%; /* Atur border-radius sesuai kebutuhan */
    padding: 10px; /* Sesuaikan padding ikon */
}
</style>
@endpush

@section('content')
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-5">
                <h2 class="heading-section">Contact</h2>
            </div>
        </div>
        <div class="row justify-content-center contact-row">
            <div class="col-md-3">
                <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <i class="material-icons">location_on</i>
                    </div>
                    <div class="text">
                        <p><span>Address:</span> jebres, Surakarta </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <i class="material-icons">phone</i>
                    </div>
                    <div class="text">
                        <p><span>Phone:</span> <a href="tel://1234567920">+ 1234 8963 8679</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <i class="material-icons">email</i>
                    </div>
                    <div class="text">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">pawcare@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <i class="material-icons">public</i>
                    </div>
                    <div class="text">
                        <p><span>Website</span> <a href="#">pawcare.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('aditional-js')
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
@endpush