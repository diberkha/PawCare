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

    .slide-container {
        max-width: 1120px;
        width: 100%;
        margin-top: 20px;
    }

    .slide-content {
        background-color: gray;
        padding: 40px;
    }

    .card {
        border-radius: 25px;
        background-color: #fff;
        width: 360px;
        justify-content: center;
        margin: 0 auto;
    }

    .image-content,
    .card-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px 14px;
    }

    .image-content {
        position: relative;
        row-gap: 5px;
        border-radius: 25px 25px 0 25px;
    }

    .card-image {
        position: relative;
        height: 150px;
        width: 150px;
        border-radius: 50%;
        background: #fff;
        padding: 1.5px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-image .card-img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #03ff10;
    }

    .name {
        font-size: 18px;
        font-weight: 500;
        color: #333;
    }

    .description {
        font-size: 14px;
        color: #707070;
        text-align: center;
    }

    .button {
        border: none;
        font-size: 16px;
        color: #fff;
        padding: 8px 16px;
        background-color: #03ff10e6;
        border-radius: 14px;
        margin: 14px;
        cursor: pointer;
        transition: all 0.3 ease;
    }

    .container-content {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #efefef;
    }

    .button:hover {
        background-color: #078b0e;
    }
</style>
@endpush

@section('content')
<div class="container-content">
    <div class="slide-container">
        <div class="slide-content">
            <div class="card-wrapper">
                <div class="card">
                    <div class="image-content">
                        <div class="card-image">
                            <img src="https://asset.kompas.com/crops/mK-X_MOAHBpf6fVw3TycM-e49Yw=/117x121:917x655/750x500/data/photo/2021/04/17/607a754500e24.jpg" alt="" class="card-img">
                        </div>
                    </div>
                    <span class="overlay"></span>
                    <div class="card-content">
                        <h2 class="name">Consultation Virtual</h2>
                        <p class="description">pawcare provides trusted veterinary consultations virtual</p>
                        <button class="button">View More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slide-container">
        <div class="slide-content">
            <div class="card-wrapper">
                <div class="card">
                    <div class="image-content">
                        <div class="card-image">
                            <img src="https://asset.kompas.com/crops/0jEWDo_Azx_VkzPNMHpOLfpKWwc=/0x0:1000x667/750x500/data/photo/2021/08/27/6128b6feba0c8.jpg" alt="" class="card-img">
                        </div>
                    </div>
                    <span class="overlay"></span>
                    <div class="card-content">
                        <h2 class="name">Consultation Offline</h2>
                        <p class="description">pawcare provides trusted veterinary consultations offline</p>
                        <button class="button">View More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slide-container">
        <div class="slide-content">
            <div class="card-wrapper">
                <div class="card">
                    <div class="image-content">
                        <div class="card-image">
                            <img src="https://asset.kompas.com/crops/AkCuNSd0YxxpEIawNRJMlQxZXJQ=/0x0:0x0/750x500/data/photo/2022/01/02/61d17ee8f1837.jpg" alt="" class="card-img">
                        </div>
                    </div>
                    <span class="overlay"></span>
                    <div class="card-content">
                        <h2 class="name">Grooming</h2>
                        <p class="description">pawcare provides recommendations for the best pet care grooming</p>
                        <button class="button">View More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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