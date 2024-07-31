<?php

namespace App\Http\Controllers;
use App\Models\Offre;
use Illuminate\Http\Request;

class OffreStageController extends Controller
{
    public function index()
    {
        //dd('here');
        $offres = Offre::all();
        return view('offre_stage.index',  compact('offres'));    }
        public function show($id)
        {
            $offre = Offre::findOrFail($id);
            return view('offres.show', compact('offre'));
        }
 
}
