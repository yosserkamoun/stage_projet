<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffreStageController extends Controller
{
    public function index()
    {
        $offres = OffreStage::all();
        return view('welcome', compact('offres'));
    }
    public function create()
    {
        return view('admin.offre_stage.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'visibilite' => 'required|string',
            'context' => 'required|string',
        ]);
        OffreStage::create($request->all());

        return redirect()->route('admin.dashboard')->with('success', 'Offre de stage créée avec succès.');
    }
    public function show($id)
    {
        $offre = OffreStage::findOrFail($id);
        return view('offre_stage.show', compact('offre'));
    }
}
