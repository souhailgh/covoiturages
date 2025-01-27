@extends('layouts.app')

@section('content')
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
               
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder" style="color: #b22331;">Connexion</h4>
                                    <p class="mb-0">Entrez votre adresse e-mail et votre mot de passe pour vous connecter</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('login.perform') }}">
                                        @csrf
                                        @method('post')
                                        <div class="flex flex-col mb-3">
                                        <label class="form-check-label" >Email</label>
                                            <input type="email" name="email" class="form-control form-control-lg" value="{{ old('email') ?? '' }}" aria-label="Email">
                                            @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                        <label class="form-check-label" >Mot de passe </label>
                                            <input type="password" name="password" class="form-control form-control-lg" aria-label="Password" value="" >
                                            @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                       
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" style="background-color: #b22331;">Connexion</button>
                                        </div>
                                    </form>
                                </div>
                               
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                    Vous n’avez pas de compte ?
                                        <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">S’enregistrer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('/asset/images/proxy-image (1).jpeg');
              background-size: cover;">
    
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
