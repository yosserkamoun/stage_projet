<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Encadreur;
use App\Models\Condidats;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class EncadreurController extends Controller
{
    public function showRegistrationForm()
    {
        return view('encadreur.inscription');
    }
    public function store(Request $request)
{

    $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|unique:encadreurs,email',
        'telephone' => 'required|string|max:20',
        'poste' => 'required|string|max:255',
        'password' => 'required|string|min:8',
    ]);

    // Création d'un nouvel encadreur
    Encadreur::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'email' => $request->email,
        'telephone' => $request->telephone,
        'poste' => $request->poste,
        'password' => bcrypt($request->password),
    ]);

    // Redirection après inscription
    return redirect()->route('encadreur.login')->with('success', 'Inscription réussie. Veuillez vous connecter.');
    }

    public function showLoginForm()
    {
        return view('encadreur.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('encadreur')->attempt($credentials)) {
            return redirect()->route('encadreur.dashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'Les informations d\'identification ne correspondent pas.',
        ]);
    }

    public function dashboard()
    {
        return view('encadreur.dashboard');
    }

    public function candidats()
    {
        $candidats = Condidats::all();
        return view('encadreur.condidats', compact('candidats'));
    }
}
