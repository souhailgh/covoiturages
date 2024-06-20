@extends('layouts.app')

@section('content')
   
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Crier un compte</h5>
                        </div>
                        <div class="row px-xl-5 px-sm-4 px-3">
                            <div class="col-3 ms-auto px-1">
                                <a class="btn btn-outline-light w-100" href="javascript:;">
                                   
                                </a>
                            </div>
                            <div class="col-3 px-1">
                                <a class="btn btn-outline-light w-100" href="javascript:;">
                                    
                                </a>
                            </div>
                            <div class="col-3 me-auto px-1">
                                <a class="btn btn-outline-light w-100" href="javascript:;">
                                   
                                </a>
                            </div>
                           
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('auth.register') }}">
                                @csrf
                                <div class="flex flex-col mb-3">
                                    <input type="text" name="username" class="form-control" placeholder="Nom" aria-label="Name" value="{{ old('Username') }}" >
                                    @error('Nom') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                                <div class="flex flex-col mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" value="{{ old('email') }}" >
                                    @error('email') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                                <div class="flex flex-col mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" aria-label="Password">
                                    @error('mot de passe') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                                <div class="form-check form-check-info text-start">
                                    <input class="form-check-input" type="checkbox" name="terms" id="flexCheckDefault" >
                                    <label class="form-check-label" for="flexCheckDefault">
                                    J'accepte  <a href="javascript:;" class="text-dark font-weight-bolder">les termes et conditions</a>
                                    </label>
                                    @error('terms') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">S'inscrire</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">Vous avez déjà un compte? <a href="{{ route('login') }}"
                                        class="text-dark font-weight-bolder">Se connecter</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.footers.guest.footer')
@endsection