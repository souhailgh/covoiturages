@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
   

<body>
<div class="container mt-5">
    <h2>Réservation de Client</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <td>Nom :</td>
                <td>Prénom : </td>
                <td>Téléphone :</td>
                <td>Lieu de départ : </td>
                <td>Lieu d'arrivée : </td>
                <td>action </td>
                <td> </td>
            </tr>
        </thead>
        <tbody>
        @foreach($réservers as $réserver)

            <tr>
                <td>{{ $réserver->id }}</td>
                <td>{{ $réserver->nom }}</td>
                <td>{{ $réserver->prenom }}</td>
                <td>{{ $réserver->Téléphone }}</td>
                <td>{{ $réserver->départ }}</td>
                <td>{{ $réserver->arrivée }}</td>
                <td>                        <button class="btn btn-info btn-view" data-toggle="modal" data-target="#viewModal">View</button>
</td>
                <td>                        

                <form action="{{ route('contactclient.destroy', $réserver->id) }}" method="POST">                            
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

<!-- View Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModalLabel">View Demande</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your form content goes here -->
                <form>
               
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" value="{{ $réserver->nom }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Prénom</label>
                        <input type="text" class="form-control" id="email" value="{{ $réserver->prenom }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Téléphone</label>
                        <input type="text" class="form-control" id="email" value="{{ $réserver->Téléphone }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Départ</label>
                        <input type="text" class="form-control" id="email" value="{{ $réserver->départ }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Arrivée</label>
                        <input type="text" class="form-control" id="email" value="{{ $réserver->arrivée }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Date</label>
                        <input type="text" class="form-control" id="email" value="{{ $réserver->date }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Heures</label>
                        <input type="text" class="form-control" id="email" value="{{ $réserver->heures }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Prix</label>
                        <input type="text" class="form-control" id="email" value="{{ $réserver->prix }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">chauffeur</label>
                        <input type="text" class="form-control" id="email" value="{{ $réserver->chauffeur }}" readonly>
                    </div> 
                   
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-secondary" id="printBtn" data-dismiss="modal">Imprimer</button>

            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    


@include('layouts.footers.auth.footer')

@endsection
