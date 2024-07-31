<?php

namespace App\Http\Controllers;
use App\Models\Offre;
use App\Models\Condidats;
use Illuminate\Http\Request;

class CondidatController extends Controller
{
    public function index($id)
    {
        $offre = Offre::findOrFail($id);
        return view('condidats.index', compact('offre')); // Assurez-vous que 'offre' est bien utilisé
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'cv' => 'required|mimes:pdf|max:2048', // Validation du CV
            'offre_id' => 'required|exists:offres,id', // Validation de l'offre
        ]);

        // Traitement du fichier CV
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('public/cvs');
        } else {
            $cvPath = null;
        }

        // Création d'un nouveau candidat
        Condidats::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'cv' => $cvPath,
            'offre_id' => $request->offre_id,
        ]);

        return redirect()->route('condidats.success');
}
public function success()
{
    return view('condidats.success');
}
}