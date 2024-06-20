@extends('layout.layout')

@section('title', 'Accueil')

@section('content')
<div class="container mt-5">
    <h1>Réservation de trajet</h1>
    <form method="POST" action="{{ route('front.Réserver', ['id' => $trajet->id]) }}" id="RéserverForm" name="réservers">
        @csrf
    <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="">
              </div>
              </div>
              <div class="col-md-6">
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="">
            </div>
            </div>
        </div>

        <div class="row">


        <div class="col-md-6">
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="">
        </div>
        </div>
            <div class="col-md-6">
        <div class="form-group">
            <label for="telephone">Téléphone :</label>
            <input type="text" class="form-control" id="telephone" name="Téléphone" placeholder="">
        </div>
        </div>
        
        </div>

        <div class="row">
            <div class="col-md-6">
        <div class="form-group">
            <label for="date">Date du trajet :</label>
            <input type="date" class="form-control" name="date" value="{{ $trajet->date }}" id="date">
            
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="heure">Heures du trajet :</label>
            <input type="time" class="form-control" name="heures" value="{{ $trajet->heures }}" id="heure">
        </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-6">
        <div class="form-group">
            <label for="prix">Prix :</label>
            <input type="text" class="form-control" id="prix"  name="prix" value="{{ $trajet->prix }}" placeholder="" style="color:red;">
        </div> </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="lieu_depart">Lieu de départ :</label>
            <input type="text" class="form-control" id="lieu_depart" name="départ" value="{{ $trajet->départ }}" placeholder="" style="color:red;">
        </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-6">
        <div class="form-group">
            <label for="lieu_arrivee">Lieu d'arrivée :</label>
            <input type="text" class="form-control" id="lieu_arrivee" name="arrivée" value="{{ $trajet->arrivée }}" placeholder=""style="color:red;">
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="chauffeur">Chauffeur :</label>
            <input type="text" class="form-control" id="chauffeur" name="chauffeur" value="{{ $trajet->chauffeur }}" placeholder="" style="color:red;">
        </div>
        </div>
        </div>
</br>

<button type="submit" class="btn btn-primary mx-auto d-block">Réserver</button>
    </form>

    @if(Session::has('message_sent'))
                        <a href="{{ route('download.pdf') }}" class="btn btn-primary">Télécharger le PDF</a>

                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message_sent') }}
                        </div>
                        @endif
                        <div>
</div>
</div>



@endsection