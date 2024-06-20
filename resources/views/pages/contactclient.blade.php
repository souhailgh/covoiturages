@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container mt-5">
        <h2>Demande d'assurance</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Email</td>
                    <td>Message</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
<tr>
    <td>{{ $contact->id }}</td>
    <td>{{ $contact->nom }}</td>
    <td>{{ $contact->prenom }}</td>
    <td>{{ $contact->email }}</td>
    <td>{{ $contact->message }}</td>
    <td>
        <!-- Form pour supprimer le contact -->
        <form action="{{ route('contactclient.destroy', $contact->id) }}" method="POST">                            
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
                    <h5 class="modal-title" id="viewModalLabel">View Contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Your form content goes here -->
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    @include('layouts.footers.auth.footer')

@endsection
