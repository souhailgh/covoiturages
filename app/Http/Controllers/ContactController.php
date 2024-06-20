<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Ajout de l'importation du modèle Contact

class ContactController extends Controller
{
    public function showContactPage()
    {
        return view('front.contact'); // Assurez-vous d'avoir une vue nommée 'contact'
    }

    public function contactcli()
    {
        $contacts = contact::all(); // Correction de la variable à utiliser
    
        return view('pages.contactclient', compact('contacts'));
    }
    

    public function submitContactForm(Request $request)
    {
        // Validation des données du formulaire (ajustez les règles selon vos besoins)
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Logique de traitement du formulaire ici, par exemple, sauvegarde du contact dans la base de données
        Contact::create($request->all());

       
        return back()->with('message_sent', 'Votre message a bien été envoyé !');
    }

    public function destroy($id)
{
    try {
        $contact = Contact::findOrFail($id); // Utilisez la même casse pour la variable
        $contact->delete(); // Utilisez la variable $contact pour supprimer
        
        return redirect()->back()->with('success', 'Contact supprimé avec succès.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Une erreur est survenue lors de la suppression du contact.');
    }
}

}
