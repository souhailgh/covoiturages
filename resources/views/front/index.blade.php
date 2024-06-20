@extends('layout.layout')

@section('title', 'accueil')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="/img/ovoiturage.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown"></h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Bienvenue dans services de voiture</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Contact<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-bg-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown"></h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Bienvenue dans services de voiture</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Contact<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Notre Mission</h5>
                            <p>Chez Ibn_Tofail_Covoiturage, notre mission est de rendre les déplacements plus pratiques, économiques et respectueux de l'environnement en encourageant le covoiturage. Rejoignez-nous pour une mobilité plus durable.</p>
                            <a class="text-secondary border-bottom" href=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Notre Équipe</h5>
                            <p>Notre équipe est composée de passionnés de la mobilité partagée, dévoués à fournir une expérience exceptionnelle à nos utilisateurs. Ensemble, nous travaillons à construire une plateforme conviviale .</p>
                            <a class="text-secondary border-bottom" href=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Nos Valeurs</h5>
                            <p>Nous sommes guidés par des valeurs de transparence, de confiance et de respect. La sécurité de nos utilisateurs est notre priorité absolue, et nous nous engageons à fournir un environnement sûr et fiable .</p>
                            <a class="text-secondary border-bottom" href=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="/img/about.jpg" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0"><span class="fs-4"></span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">A propos de nous</h6>
                    <h1 class="mb-4"><span class="text-primary">Ibn_Tofail_Covoiturage</span> </h1>
                    <p class="mb-4">Ibn_Tofail_Covoiturage incarne l'innovation, la fiabilité et la durabilité dans le domaine du covoiturage. Notre plateforme offre une solution moderne et conviviale pour connecter les conducteurs et les passagers, rendant ainsi les déplacements plus pratiques que jamais. Avec notre engagement envers la sécurité, la qualité du service et notre vision d'un avenir plus durable, nous sommes fiers de jouer un rôle actif dans la transformation des habitudes de déplacement tout en préservant l'environnement. Rejoignez-nous chez Ibn_Tofail_Covoiturage pour une expérience de covoiturage enrichissante et responsable.</p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                          
                        </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Expert Technicians</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Compleate Projects</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase"></h6>
                <h1 class="mb-5"> Services</h1>
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


    @endsection