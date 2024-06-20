@extends('layout.layout')

@section('title', 'A_propos')
@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(/img/Rouge.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


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
                        <img class="position-absolute img-fluid w-100 h-100" src="/img/ovoiturage.jpg" style="object-fit: cover;" alt="">
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


    <!-- Fact End -->


   
        
    @endsection