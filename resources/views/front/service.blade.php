@extends('layout.layout')

@section('title', 'accueil')
@section('content')

    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase"> </h6>
                <h1 class="mb-5">Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Réservation Facile et Rapide</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Trajets Réguliers ou Occasionnels </h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">Service Client Réactif </h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-oil-can fa-2x me-3"></i>
                            <h4 class="m-0">Trajets Écologiques et Responsables </h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Réservation Facile et Rapide</h3>
                                     <p class="mb-4"><i class="fa fa-check text-success me-3"></i>Avec Ibn_Tofail_Covoiturage, réserver un trajet n'a jamais été aussi simple. Notre plateforme conviviale vous permet de trouver et de réserver rapidement des trajets avec des conducteurs fiables et des passagers partageant les mêmes intérêts. Plus de tracas liés à la planification, réservez votre place en quelques clics et partez l'esprit tranquille.</p>
                                     </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="/img/service-5.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Trajets Réguliers ou Occasionnels </h3>
                                    <p class="mb-4"><i class="fa fa-check text-success me-3"></i>Que vous ayez besoin d'un trajet quotidien pour vous rendre au travail ou que vous planifiiez un voyage occasionnel, Ibn_Tofail_Covoiturage vous offre la flexibilité dont vous avez besoin. Trouvez des covoitureurs pour des trajets réguliers ou ponctuels, et voyagez en toute sécurité tout en économisant de l'argent.</p>
                                    </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Service Client Réactif </h3>
                                    <p class="mb-4"><i class="fa fa-check text-success me-3"></i>Notre équipe dévouée de service client est là pour vous aider à chaque étape de votre voyage. Que vous ayez des questions sur la réservation, besoin d'aide pour trouver un covoitureur compatible ou des préoccupations concernant la sécurité, nous sommes là pour vous offrir un soutien rapide et efficace.</p>
                                    </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Trajets Écologiques et Responsables </h3>
                                    <p class="mb-4"><i class="fa fa-check text-success me-3"></i>En choisissant Ibn_Tofail_Covoiturage, vous contribuez à réduire l'empreinte carbone de vos déplacements. Le covoiturage permet de partager les frais et les émissions tout en réduisant le nombre de véhicules sur les routes. Rejoignez-nous dans notre engagement pour un avenir plus vert et optez pour des trajets écologiques et responsables avec Ibn_Tofail_Covoiturage.</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Booking Start -->
  
    @endsection