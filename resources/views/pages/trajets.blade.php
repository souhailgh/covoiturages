@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
   
    <div class="container">
    <h2>Les trajets</h2>
    <br>
    @if(Session::has('message_sent'))

                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message_sent') }}
                        </div>
                        @endif
                        <div>
    <form action="{{ route('trajets') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="depart">Départ :</label>
                    <select class="form-control" id="depart" name="départ" required>
    <option value="">Sélectionner une ville</option>
</select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="arrivee">Arrivée :</label>
                    <select class="form-control" id="arrivee" name="arrivée" required>
    <option value="">Sélectionner une ville</option>
</select>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="prix">Prix :</label>
                    <input type="text" class="form-control" id="prix" name="prix" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date">Date :</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="heure">Heure :</label>
                    <input type="time" class="form-control" id="heure" name="heures" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="chauffeur">Chauffeur :</label>
                    <input type="text" class="form-control" id="chauffeur" name="chauffeur" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>

    <div class="container">
      

        <!-- Tableau pour afficher les trajets -->
        <table class="table">
            <thead>
                <tr>
                    <th>Départ</th>
                    <th>Arrivée</th>
                    <th>Prix</th>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Chauffeur</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gestion_trajets as $trajet)
                <tr>
                    <td>{{ $trajet->départ }}</td>
                    <td>{{ $trajet->arrivée }}</td>
                    <td>{{ $trajet->prix }} Dh</td>
                    <td>{{ $trajet->date }}</td>
                    <td>{{ $trajet->heures }}</td>
                    <td>{{ $trajet->chauffeur }}</td>
                    <td>
                        <!-- Formulaire pour supprimer le trajet -->
                        <form action="{{ route('trajets.destroy', $trajet->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    // Liste des villes du Maroc (vous pouvez ajouter plus de villes si nécessaire)
    var villes = ["Casablanca", "Rabat", "Marrakech", "Fès", "Tanger", "Agadir", "Ouarzazate", "Essaouira", "Chefchaouen", "Meknès"];

    // Remplir les selects avec les villes
    var departSelect = $('#depart');
    var arriveeSelect = $('#arrivee');

    $.each(villes, function(index, ville){
        departSelect.append('<option value="' + ville + '">' + ville + '</option>');
        arriveeSelect.append('<option value="' + ville + '">' + ville + '</option>');
    });
});
</script>


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
