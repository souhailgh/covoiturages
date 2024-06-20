@extends('layout.layout')

@section('title', 'accueil')
@section('content')
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase"> Contact </h6>
                <h1 class="mb-5">Contactez-Nous</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase"> Thélephone </h5>
                                <p class="m-0"><i class="fa fa-phone text-primary"></i>+212 658-299089</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase"> General </h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>Elgourch@uit.ac.ma</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase"> Address </h5>
                                <p class="m-0"><i class="fa fa-map-marker text-primary me-2"></i>Kenitra campus 14 000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <img class="position-relative rounded w-100 h-100"
                        src="img/rouge.jpg"
                        frameborder="0" style="height: 250px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0">
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                    @if(Session::has('message_sent'))

                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message_sent') }}
                        </div>
                        @endif
                        <div>
                            <form method="POST" action="{{ route('front.contact') }}" id="contactForm" name="contacts" class="contactForm">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name="nom" id="name" placeholder="">
                                        <label for="name">Nom</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name="prenom" id="name" placeholder="">
                                        <label for="name">Prenom</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                               
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" placeholder="" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Contact End -->

    @endsection
   