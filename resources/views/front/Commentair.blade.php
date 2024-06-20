@extends('layout.layout')

@section('title', 'Accueil')

@section('content')

<div class="container mt-5">
    <h2>Envoyer un commentaire sur Ibn_Tofail_Covoiturage</h2>
    @if(Session::has('message_sent'))

                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message_sent') }}
                        </div>
                        @endif
                        <div>
    <form method="POST" action="{{ route('front.Commentair') }}" id="CommentForm">
        @csrf
        <div class="form-group">
            <label for="nom_client">Ville :</label>
            <input type="text" class="form-control" id="ville" name="ville" placeholder="Votre ville">
        </div>
        <div class="form-group">
            <label for="commentaire">Commentaire :</label>
            <textarea class="form-control" id="commentaire" name="commentaireclie" rows="3" placeholder="Votre commentaire"></textarea>
        </div>
        </br>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>


</br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">les Commentaires clients</div>
                <div class="card-body">
    <div class="comment-section">
        @foreach($commentaire as $commentaire)
            <div class="comment">
                <div class="comment-info">
                    <span class="comment-author">{{ $commentaire->ville }}</span>
</br>
                    <span class="comment-date">{{ $commentaire->created_at }}</span>
                </div>
                <p class="comment-text">{{ $commentaire->commentaireclie }}</p>
            </div>
            <hr>
        @endforeach

    </div>
    </div>
</div>

</div>
</div>

</div>
</div>

@endsection
