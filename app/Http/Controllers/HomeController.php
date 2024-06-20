<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $contacts = Contact::all(); // Assurez-vous que le modèle Contact est correctement importé
    
        return view('pages.dashboard')->with('contacts', $contacts);
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }
}

