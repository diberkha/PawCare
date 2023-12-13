@extends('paw-user.master')

@section('title', 'Paw Care')

@push('aditional-css')
<link rel="stylesheet" href="css/stylehome2.css">
<!-- Link ke file CSS Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Link ke Material Icons -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@endpush

@section('content')
<div class="container d-flex">
    <div class="right-section">
        <div class="section-title">Welcome to Paw Care</div>
        <h2>Excellent and professional service</h2>
        <div class="section-paragraph">
            <p>
                Pawcare services must provide quality and safe care for pets. This maintenance must be carried out by professionals who have adequate experience and skills.
            </p>
        </div>
        <div class="button-group">
            <button class="btn btn-primary btn-make-appointment" onclick="location.href=`{{ route('pawcare.confirmuser') }}`">
                Make an appointment
            </button>
            <button class="btn btn-secondary">Explore</button>
        </div>
    </div>

    <div class="left-section">
        <div class="image-grid">
            <!-- Mengganti placeholder dengan gambar berita hewan -->
            <img src="https://placekitten.com/800/600" alt="Animal News 1">
            <img src="https://placekitten.com/801/600" alt="Animal News 2">
            <img src="https://placekitten.com/802/600" alt="Animal News 3">
            <img src="https://placekitten.com/803/600" alt="Animal News 4">
            <img src="https://placedog.net/800/600" alt="Animal News 5">
            <img src="https://placedog.net/801/600" alt="Animal News 6">
            <img src="https://placedog.net/802/600" alt="Animal News 7">
            <img src="https://placedog.net/803/600" alt="Animal News 8">
            <img src="https://placekitten.com/807/600" alt="Animal News 9">
        </div>
    </div>
</div>
<hr>
<div class="container carousel-container">
    <h2 id="carousel-title">Health News for Your Pet</h2>
    <div id="healthCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url('images/image_1.jpg');">
                <div class="carousel-caption">
                    <h3>Important Health Tips for Your Pet</h3>
                    <p>
                        Ensuring your pet's well-being involves regular veterinary check-ups, a balanced diet, and daily exercise. Maintain their oral health with regular dental care and provide proper grooming. Prevent parasites, keep them hydrated, and offer environmental enrichment. Consider microchipping for identification, and watch for signs of illness. Taking these proactive steps contributes to a long and happy companionship with your pet.
                    </p>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url('images/image_2.jpg');">
                <div class="carousel-caption">
                    <h3>Common Health Issues in Pets</h3>
                    <p>Pets commonly face health challenges that necessitate attention. These include concerns like obesity, dental problems, fleas, ticks, allergies, arthritis, ear infections, digestive issues, and behavioral problems. Regular veterinary check-ups and proactive care are key to identifying and addressing these issues early, ensuring your pet's overall well-being.</p>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url('images/image_3.jpg');">
                <div class="carousel-caption">
                    <h3>Understanding Your Pet's Diet</h3>
                    <p>A proper understanding of your pet's diet is crucial for their overall health and happiness. Tailor their meals to their specific nutritional needs, considering factors like age, breed, and activity level. Provide a balanced diet rich in proteins, vitamins, and minerals. Consult with your veterinarian to create a diet plan that promotes optimal health and helps prevent common dietary-related issues. Remember, a well-nourished pet is a happy and thriving companion.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#healthCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#healthCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<hr>
@endsection

@push('aditional-js')
<!-- Link ke file JavaScript Bootstrap (Opsional, tergantung kebutuhan) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush