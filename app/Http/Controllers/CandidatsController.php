<?php

namespace App\Http\Controllers;


use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Candidat::orderby('id')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required'],
            'dateDeNaissance' => ['required'],
            'lieuDeNaissance' => ['required'],
            'nationalite' => ['required'],
            'situationFamiliale' => ['required'],
            'adresse' => ['required'],
            'contact' => ['required'],
            'serie' => ['required'],
            'postule' => ['required'],
            'genre' => ['required'],
            'selectedDiplome' => ['required'],
        ]);

        $candidat = Candidat::create([
            $request->except('selectedDiplome'),

        ]);   
        $candidat->update(['anneeCandidature' => date('Y') + 1]);
        return response()->json(['success' => 1],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function show(Candidat $candidat)
    {
        return [
            "id" => $candidat->id,
            'nom' => $candidat->nom,
            "prenom" => $candidat->prenom,
            "age" => $candidat->age,
            "serie" => $candidat->serie,
            "nationalite" => $candidat->nationalite,
            "situationFamiliale" => $candidat->situationFamiliale,
            "contact" => $candidat->contact,
            "nombreEnfant" => $candidat->nombreEnfant,
            "adresse" => $candidat->adresse,

            "email" => $candidat->email,
            "dateDeNaissance" => $candidat->dateDeNaissance,
            "lieuDeNaissance" => $candidat->lieuDeNaissance,
            "postule" => $candidat->postule,
            "genre" => $candidat->genre,
            "concours" => $candidat->concours,
            "entretien" => $candidat->entretien,
            "classe" => $candidat->classe,
            "status" => $candidat->status,
            "anneeCandidature" => $candidat->anneeCandidature,
            "matricule" => $candidat->matricule,
            "nomPere" => $candidat->nomPere,
            "nomMere" => $candidat->nomMere,
            "nomTuteur" => $candidat->nomTuteur,
            "professionPere" => $candidat->professionPere,
            "professionMere" => $candidat->professionMere,
            "professionTuteur" => $candidat->professionTuteur,
            "telPere" => $candidat->telPere,
            "telMere" => $candidat->telMere,
            "telTuteur" => $candidat->telTuteur,
            "finish" => $candidat->finish,
            "abandon" => $candidat->abandon,
            "finishL3" => $candidat->finishL3,
            "L1" => $candidat->l1,
            "L2" => $candidat->l2,
            "L3" => $candidat->l3,
            "M1" => $candidat->m1,
            "M2" => $candidat->m2,
        ]; 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidat $candidat)
    {
        $request->validate([
            'nom' => ['required'],
            'serie' => ['required'],
            'situationFamiliale' => ['required'],
            'nationalite' => ['required'],
            'adresse' => ['required'],
            'dateDeNaissance' => ['required'],
            'lieuDeNaissance' => ['required'],
            'postule' => ['required'],
            'genre' => ['required'],
        ]);
        
        if($candidat->update($request->all())){
            return response()->json([
                "succes" => "1"
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidat $candidat)
    {
        if($candidat->delete()){
            return response()->json([
                "success" => "1"
            ], 200);
        }
    }
}
