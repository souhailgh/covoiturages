<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande d'assurance</title>
    <!-- Ajoutez vos styles CSS ici -->
</head>
<body>
    <h1>Demande d'assurance</h1>
    <p>Nom complet: {{ $demande->nom }}</p>
    <p>Date de naissance: {{ $demande->date_naissance }}</p>
    <p>Modèle: {{ $demande->model }}</p>
    <p>Matricule: {{ $demande->matricule }}</p>
    <p>Numéro de permis: {{ $demande->numero_permis }}</p>
    <p>Téléphone: {{ $demande->telephone }}</p> 
    <p>Ville: {{ $demande->ville }}</p>
    <p>Date de demande: {{ $demande->date_demande }}</p>
    <p>Type de contrat: {{ $demande->type_contrat }}</p>
    <p>Date de mise en circulation: {{ $demande->date_mise_circulation }}</p>
    <p>Carburant: {{ $demande->carburant }}</p>
    <p>Marque: {{ $demande->marque }}</p>
    <!-- Ajoutez d'autres champs du formulaire ici -->
</body>
</html>
