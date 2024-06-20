<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gestion_trajet;

class bookingController extends Controller
{
    public function searchForm()
    {
        $gestion_trajets = gestion_trajet::all(); // Assurez-vous que le modèle gestion_trajet est correctement importé

        return view('front.booking')->with('gestion_trajets', $gestion_trajets);
    }

    public function searchFlight(Request $request)
    {
        $departure = $request->input('départ');
        $arrival = $request->input('arrivée');
        $date = $request->input('date');

        // Logique de recherche dans la base de données
        $gestion_trajets = gestion_trajet::where('départ', $departure)
                         ->where('arrivée', $arrival)
                         ->whereDate('date', $date)
                         ->get();

                         return view('front.booking', ['gestion_trajets' => $gestion_trajets]);
    }
}
