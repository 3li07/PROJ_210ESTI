<?php

namespace App\Http\Controllers;

use App\Models\L1Model;
use Illuminate\Http\Request;

class L1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $listes = L1Model::all();
        foreach($listes as $liste){
            $data[] = [
                'nom' => $liste->candidat->nom,
                'prenom' => $liste->candidat->prenom,
                'serie' => $liste->candidat->serie,
                'contact' => $liste->candidat->contact,
                'situationFamiliale' => $liste->candidat->situationFamiliale,
                'nationalite' => $liste->candidat->nationalite,
                'nombreEnfant' => $liste->candidat->nombreEnfant,
                'adresse' => $liste->candidat->adresse,
                'email' => $liste->candidat->email,
                'lieuDeNaissance' => $liste->candidat->lieuDeNaissance,
                'dateDeNaissance' => $liste->candidat->dateDeNaissance,
                'postule' => $liste->candidat->postule,
                'genre' => $liste->candidat->genre,
                'anneeCandidature' => $liste->candidat->annee,
                'matricule' => $liste->candidat->matricule,
                'nomPere' => $liste->candidat->nomPere,
                'nomMere' => $liste->candidat->nomMere,
                'nomTuteur' => $liste->candidat->nomTuteur,
                'professionPere' => $liste->candidat->professionPere,
                'professionMere' => $liste->candidat->professionMere,
                'professionTuteur' => $liste->candidat->professionTuteur,
                'telPere' => $liste->candidat->telPere,
                'telMere' => $liste->candidat->telMere,
                'telTuteur' => $liste->candidat->telTuteur,
                'annee' => $liste->annee,
                'status' => $liste->status,
                'groupe' => $liste->groupe,
            ]; 
        }
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $l1Model = L1Model::findOrFail($id);
        return $data[] = [
            'id' => $l1Model->id,
            'nom' => $l1Model->candidat->nom,
            'prenom' => $l1Model->candidat->prenom,
            'serie' => $l1Model->candidat->serie,
            'contact' => $l1Model->candidat->contact,
            'situationFamiliale' => $l1Model->candidat->situationFamiliale,
            'nationalite' => $l1Model->candidat->nationalite,
            'nombreEnfant' => $l1Model->candidat->nombreEnfant,
            'adresse' => $l1Model->candidat->adresse,
            'email' => $l1Model->candidat->email,
            'lieuDeNaissance' => $l1Model->candidat->lieuDeNaissance,
            'dateDeNaissance' => $l1Model->candidat->dateDeNaissance,
            'postule' => $l1Model->candidat->postule,
            'genre' => $l1Model->candidat->genre,
            'anneeCandidature' => $l1Model->candidat->annee,
            'matricule' => $l1Model->candidat->matricule,
            'nomPere' => $l1Model->candidat->nomPere,
            'nomMere' => $l1Model->candidat->nomMere,
            'nomTuteur' => $l1Model->candidat->nomTuteur,
            'professionPere' => $l1Model->candidat->professionPere,
            'professionMere' => $l1Model->candidat->professionMere,
            'professionTuteur' => $l1Model->candidat->professionTuteur,
            'telPere' => $l1Model->candidat->telPere,
            'telMere' => $l1Model->candidat->telMere,
            'telTuteur' => $l1Model->candidat->telTuteur,
            'annee' => $l1Model->annee,
            'status' => $l1Model->status,
            'groupe' => $l1Model->groupe,
            'candidat_id' => $l1Model->candidat_id,
            'created_at' => $l1Model->created_at,
            'updated_at' => $l1Model->updated_at,
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\L1Model  $l1Model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, L1Model $l1Model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\L1Model  $l1Model
     * @return \Illuminate\Http\Response
     */
    public function destroy(L1Model $l1Model)
    {
        ($l1Model->delete()) ? response()->json(['success' => 1]) : response()->json(['success' => 0]);
    }
}
