@extends('layout.layout')

@section('title', 'accueil')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase"></h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Fatima</h5>
                    <p>32 ans </p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Ibn_Tofail_Covoiturage a vraiment simplifié mes déplacements quotidiens. J'ai rencontré des covoitureurs sympas et fiables qui partagent le même trajet que moi. C'est une solution pratique et économique que je recommande à tous mes amis.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Youssef</h5>
                    <p>27 ans</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0"> Je suis impressionné par la qualité du service de Ibn_Tofail_Covoiturage. Trouver un covoiturage est devenu tellement facile grâce à leur application conviviale. Je me sens en sécurité à chaque trajet et j'ai fait de belles rencontres grâce à Ibn_Tofail_Covoiturage.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Sara </h5>
                    <p>35 ans </p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">En tant que maman occupée, Ibn_Tofail_Covoiturage est devenu mon meilleur allié pour gérer mes déplacements. Leur équipe de service client est toujours là pour répondre à mes questions et m'assurer une expérience agréable à chaque trajet.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Omar</h5>
                    <p>26 ans </p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Ibn_Tofail_Covoiturage m'a vraiment simplifié la vie. Je peux désormais me déplacer sans souci, que ce soit pour aller au travail ou pour des sorties entre amis. C'est une solution pratique et abordable que je recommande à tous ceux qui cherchent à économiser du temps et de l'argent.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    @endsection