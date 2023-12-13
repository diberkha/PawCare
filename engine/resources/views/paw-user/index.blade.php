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
@endpush

@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-11 ftco-animate text-center">
                <h1 class="mb-4" style="font-size: 40px;">"Taking Care For Your Smart Pet's !"</h1>
                <h1 class="mb-4" style="font-size: 20px;">Human-canine bonding is the relationship between pets and humans</h1>
                <p><a href="{{route('pawcare.dash')}}" class="btn btn-primary mr-md-4 py-3 px-4">Get Started <span class="ion-ios-arrow-forward"></span></a></p>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section bg-light ftco-no-pt ftco-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                <div class="d-block services text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-blind"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Health Care</h3>
                        <p>Providing pet owners with the information necessary to care for and monitor their pets' health.</p>
                        <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                <div class="d-block services text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-dog-eating"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Pet Daycare</h3>
                        <p>Giving pet owners easy and reliable access to plan daily or long-term care for their beloved pets</p>
                        <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                <div class="d-block services text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-grooming"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Pet Grooming</h3>
                        <p>A facility designed to make it easier for pet owners to care for and maintain the cleanliness of their pets</p>
                        <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-5 d-flex">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/about-1.png);">
                </div>
            </div>
            <div class="col-md-7 pl-md-5 py-md-5">
                <div class="heading-section pt-md-5">
                    <h2 class="mb-4">Why Choose Us?</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
                        <div class="text pl-3">
                            <h4>Health Consultation</h4>
                            <p>A service that allows pet owners to consult online with animal health experts.</p>
                        </div>
                    </div>
                    <div class="col-md-6 services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-customer-service"></span></div>
                        <div class="text pl-3">
                            <h4>Customer Supports</h4>
                            <p>Providing assistance, information and solutions to users regarding pet care and needs</p>
                        </div>
                    </div>
                    <div class="col-md-6 services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-emergency-call"></span></div>
                        <div class="text pl-3">
                            <h4>Emergency Services</h4>
                            <p>Provides fast and appropriate assistance in emergency situations involving pets</p>
                        </div>
                    </div>
                    <div class="col-md-6 services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
                        <div class="text pl-3">
                            <h4>Daily Petcare</h4>
                            <p>Makes it easier for pet owners to carry out optimal daily routines for pet welfare</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter" id="section-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="100">0</strong>
                    </div>
                    <div class="text">
                        <span>Customer</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="150">0</strong>
                    </div>
                    <div class="text">
                        <span>Professionals</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="10">0</strong>
                    </div>
                    <div class="text">
                        <span>Products</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="5">0</strong>
                    </div>
                    <div class="text">
                        <span>Pets House</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section testimony-section" style="background-image: url('images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Happy Clients &amp; Feedbacks</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">I absolutely love this Paw Care app! It's user-friendly and has everything I need to keep track of my pet's health. The reminders for vaccinations and appointments are a lifesaver.
                                    Highly recommend!</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/bagas_1.png)"></div>
                                    <div class="pl-3">
                                        <p class="name">Bagas Ferdianto</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">I love the reminders for vaccinations and grooming appointments. The only improvement I suggest is adding more customization options for the pet profiles. Otherwise, it's been very helpful in keeping my pet's schedule organized.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/berkha_1.png)"></div>
                                    <div class="pl-3">
                                        <p class="name">Diberkha Sajna</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">Overall, a great app for managing pet care tasks. I love the reminders for vaccinations and grooming appointments. The only improvement I suggest is adding more customization options for the pet profiles.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/fatkhul_1.png)"></div>
                                    <div class="pl-3">
                                        <p class="name">Fatkhul Hadi</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">Fantastic app! I use it to schedule walks for my dog, and the GPS tracking feature ensures he's getting enough exercise. The in-app community is a nice touch too – I can connect with other pet owners and share tips.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/faiz_1.png)"></div>
                                    <div class="pl-3">
                                        <p class="name">Abdurrahman Faiz</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">I appreciate the app's simplicity and how it covers all the basics. It helps me keep track of my cat's feeding schedule. However, it would be nice to see additional features like a pet health tracker or integration with vet clinics.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/fian_1.png)"></div>
                                    <div class="pl-3">
                                        <p class="name">Alfian Haris</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Pets Gallery</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-1.jpg);">
                    <a href="images/gallery-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <span>Cat</span>
                            <h2><a href="work-single.html">Persian Cat</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-2.jpg);">
                    <a href="images/gallery-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <span>Dog</span>
                            <h2><a href="work-single.html">Pomeranian</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-3.jpg);">
                    <a href="images/gallery-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <span>Cat</span>
                            <h2><a href="work-single.html">Sphynx Cat</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-4.jpg);">
                    <a href="images/gallery-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <span>Cat</span>
                            <h2><a href="work-single.html">British Shorthair</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-5.jpg);">
                    <a href="images/gallery-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <span>Dog</span>
                            <h2><a href="work-single.html">Beagle</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-6.jpg);">
                    <a href="images/gallery-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <span>Dog</span>
                            <h2><a href="work-single.html">Pug</a></h2>
                        </div>
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