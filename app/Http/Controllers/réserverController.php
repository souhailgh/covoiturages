<?php

namespace App\Http\Controllers;

use App\Models\réserver;
use App\Models\gestion_trajet;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class RéserverController extends Controller
{
    public function showDemandePage($id)
    {
        // Récupérer le trajet spécifique en fonction de l'ID fourni
        $trajet = gestion_trajet::findOrFail($id);
        
        // Retourner la vue avec le trajet
        return view('front.Réserver', compact('trajet'));
    }
    
    public function contactcli()
    {
        $réservers = réserver::all(); // Correction de la variable à utiliser
    
        return view('pages.réservation', compact('réservers'));
    }

    public function submitDemandeForm(Request $request, $id)
    {
        // Validation des données du formulaire
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'Téléphone' => 'required',
            'date' => 'required',
            'heures' => 'required',
            'prix' => 'required',
            'départ' => 'required',
            'arrivée' => 'required',
            'chauffeur' => 'required',
        ]);
    
        // Créer une nouvelle réservation avec les données du formulaire et l'ID du trajet
        Réserver::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'Téléphone' => $request->Téléphone,
            'date' => $request->date,
            'heures' => $request->heures,
            'prix' => $request->prix,
            'départ' => $request->départ,
            'arrivée' => $request->arrivée,
            'chauffeur' => $request->chauffeur,
            'gestion_trajet_id' => $id,
        ]);
    
        // Rediriger avec un message de confirmation
        return redirect()->back()->with('message_sent', 'Votre réservation a bien été effectuée !');
    }


    public function downloadPDF(Request $request)
    {
        // Récupération des données de la demande depuis la base de données
        $réserver = réserver::latest()->first(); // Vous devez ajuster cette logique pour récupérer les données correctes
    
        // Génération du PDF à partir de la vue demande_pdf.blade.php
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('demande_pdf', compact('réserver')));
        $dompdf->setPaper('A5', 'portrait'); // Réglez le format et l'orientation du papier selon vos préférences
        $dompdf->render();
    
        // Téléchargement du PDF
        return $dompdf->stream('demande.pdf');
    }

    public function destroy($id)
{
    try {
        $réserver = réserver::findOrFail($id); // Utilisez la même casse pour la variable
        $réserver->delete(); // Utilisez la variable $contact pour supprimer
        
        return redirect()->back()->with('success', 'Contact supprimé avec succès.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Une erreur est survenue lors de la suppression du contact.');
    }
}
    
}

