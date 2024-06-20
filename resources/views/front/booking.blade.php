@extends('layout.layout')

@section('title', 'Accueil')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(/img/Rouge.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Trajet</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Trajet</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Recherche de Trajet</div>
                <div class="card-body">
                    <form method="GET" action="{{ route('front.booking') }}">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <label for="departure">Départ :</label>
                                    <select class="form-control" id="departure" name="départ" required>
    <option value="">Sélectionner une ville</option>
</select>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label for="arrival">Arrivée :</label>
                                    <select class="form-control" id="arrival" name="arrivée" required>
    <option value="">Sélectionner une ville</option>
</select>
                                </div>
                           
                        
                                <div class="col-md-4 mb-4">
                                    <label for="date">Date :</label>
                                    <input type="date" class="form-control" id="date" name="date" required>
                                </div>
                                </div>
                        </div>
                        <div class="form-group ">
    <button type="submit" class="btn btn-primary float-right">Rechercher</button>
</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Résultats de la recherche</div>
                <div class="card-body">
                    <div class="row">
                        @foreach($gestion_trajets as $trajet)
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <!-- Placeholder for photo -->
                                    <div class="card-body">
                                        <h5 class="card-title">Départ: {{ $trajet->départ }}</h5>
                                        <p class="card-text">Arrivée: {{ $trajet->arrivée }}</p>
                                        <p class="card-text">Date: {{ $trajet->date }}</p>
                                        <p class="card-text">Heures: {{ $trajet->heures }}</p>
                                        <a href="{{ route('front.Réserver', ['id' => $trajet->id]) }}" class="btn btn-danger">Réserver</a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    // Liste des villes du Maroc (vous pouvez ajouter plus de villes si nécessaire)
    var villes = ["Casablanca", "Rabat", "Marrakech", "Fès", "Tanger", "Agadir", "Ouarzazate", "Essaouira", "Chefchaouen", "Meknès"];

    // Remplir les selects avec les villes
    var departureSelect = $('#departure');
    var arrivalSelect = $('#arrival');

    $.each(villes, function(index, ville){
        departureSelect.append('<option value="' + ville + '">' + ville + '</option>');
        arrivalSelect.append('<option value="' + ville + '">' + ville + '</option>');
    });
});
</script>
         
@endsection
