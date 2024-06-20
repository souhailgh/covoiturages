<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gestion_trajet;

class trajetsController extends Controller
{
    public function showdemandePage()
    {
        $gestion_trajets = gestion_trajet::all();
        return view('pages.trajets', compact('gestion_trajets'));
    }

    public function submitdemandeForm(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'départ'=> 'required',
            'arrivée'=> 'required',
            'date'=> 'required',
            'heures'=> 'required',
            'prix'=> 'required',
            'chauffeur'=> 'required',
        ]);

        // Création du trajet
        gestion_trajet::create($request->all());

        return back()->with('message_sent', 'Votre trajet a bien été ajouter !');
    }

    public function destroy($id)
    {
        try {
            $trajet = gestion_trajet::findOrFail($id);
            $trajet->delete();
            
            return redirect()->back()->with('success', 'Trajet supprimé avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la suppression du trajet.');
        }
    }
}
