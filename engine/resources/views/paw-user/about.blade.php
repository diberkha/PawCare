@extends('paw-user.masteruser')

@section('title', 'Paw Care')

@push('aditional-css')
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
    header {
        background-color: #eceaea;
        color: rgb(0, 0, 0);
        text-align: center;
    }


    .team-section {
        padding: 2em 0;
    }

    .about__data {
        text-align: center;
    }

    .about__description {
        margin-bottom: var(--mb-3);
        text-align: justify;
        margin-left: 1.5rem;
        margin-right: 1.5rem;
    }

    .about__img {
        width: 280px;
        border-radius: .5rem;
        justify-self: center;
    }

    .section-subtitle {
        text-align: center;
    }

    .ftco-counter {
        background-color: #f8f9fa;
        /* Latar belakang abu-abu */
        padding: 2em 0;
        /* Sesuaikan padding sesuai kebutuhan */
    }

    .ftco-counter .container {
        display: flex;
        justify-content: space-around;
    }

    .ftco-counter .counter-wrap {
        flex: 1;
    }

    .ftco-counter .block-18 {
        background-color: white;
        border-radius: 1rem;
        padding: 2rem;
        text-align: center;
    }

    /* Tambahkan CSS untuk menampilkan kolom secara horizontal */
    .ftco-counter .row {
        display: flex;
        justify-content: space-around;
    }

    .ftco-counter .col-md-6 {
        flex: 1;
    }
</style>
@endpush

@section('content')
<header>
    <h1>About PawCare</h1>
</header>

<div class="about-container">
    <section class="about-section bd-countainer" id="about">
        <div class="about_container bd-grid">
            <div class="about__data">
                <h2 class="section-title about__initial">Professional Services in Pet Care</h2>
                <p class="about__description">PawCare is your trusted partner in pet care. At PawCare, we understand that your pet is more than just an animal; they are valuable members of your family. Our mission is to provide the best veterinary services, creating a paradise where your furry friends receive the love and attention they deserve.

                    On our website, we provide many of our state-of-the-art clinics, tailored to meet the unique needs of your beloved pet. From routine checkups and vaccinations to specialized care, our dedicated team of veterinarians is committed to ensuring the health and happiness of your four-legged pet.</p>
                <div class="left-section">
                    <div class="image-grid">
                        <!-- Mengganti placeholder dengan gambar berita hewan -->
                        <img src="https://placekitten.com/800/600" alt="Animal News 1" class="about__img">
                        <img src="https://placedog.net/800/600" alt="Animal News 5" class="about__img">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="ftco-counter" id="section-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number"><span data-number="20">0</span></strong>
                    </div>
                    <div class="text">
                        <span>Customer</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number"><span data-number="500">0</span></strong>
                    </div>
                    <div class="text">
                        <span>Professionals</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number"><span data-number="50">0</span></strong>
                    </div>
                    <div class="text">
                        <span>PetsCare</span>
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Fungsi untuk memulai animasi counting
        function startCounting() {
            var counters = document.querySelectorAll('.number span');
            counters.forEach(counter => {
                var target = +counter.getAttribute('data-number');
                var current = 0;
                var step = Math.ceil(target / 50); // Sesuaikan kecepatan animasi di sini

                function updateCounter() {
                    current += step;
                    if (current >= target) {
                        current = target;
                        clearInterval(interval);
                    }
                    counter.textContent = current;
                }

                var interval = setInterval(updateCounter, 20);
            });
        }

        // Panggil fungsi untuk memulai animasi counting
        startCounting();
    });
</script>
@endpush