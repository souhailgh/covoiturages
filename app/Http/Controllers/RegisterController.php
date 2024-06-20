<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Importez la classe Request

use App\Models\register;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
{
    $attributes = $request->validate([
        'username' => 'required|max:255|min:2',
        'email' => 'required|email|max:255|unique:registers,email',
        'password' => 'required|min:5|max:255',
        'terms' => 'required'
    ]);
    
    $hashedPassword = bcrypt($request->input('password'));

    register::create([
        'username' => $request->input('username'),
        'email' => $request->input('email'),
        'password' => $hashedPassword,
        'terms' => $request->input('terms'),
    ]);

    return redirect('/admin');
}

}
