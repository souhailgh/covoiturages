<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commentaire;

class commentaireController extends Controller
{
    public function showContactPage()
    {
        $commentaire = commentaire::all(); // Retrieve all comments

        return view('front.Commentair', compact('commentaire')); // Assurez-vous d'avoir une vue nommée 'Commentair'
    }

    public function contactcli()
{
    $commentaire = commentaire::all(); // Correction de la variable à utiliser

    return view('pages.Commentaireclient', compact('commentaire'));
}

    

    public function submitContactForm(Request $request)
    {
        // Validation des données du formulaire (ajustez les règles selon vos besoins)
        $request->validate([
            'ville' => 'required',
            'commentaireclie' => 'required',
        ]);

        // Logique de traitement du formulaire ici, par exemple, sauvegarde du commentaire dans la base de données
        commentaire::create($request->all());

        return back()->with('message_sent', 'Votre commentaire a bien été envoyé !');
    }

    public function destroy($id)
    {
        try {
            $commentaire = commentaire::findOrFail($id); // Utilisez la même casse pour la variable
            $commentaire->delete(); // Utilisez la variable $commentaire pour supprimer
        
            return redirect()->back()->with('success', 'Commentaire supprimé avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la suppression du commentaire.');
        }
    }
}
