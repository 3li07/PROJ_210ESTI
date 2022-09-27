<?php

namespace App\Http\Controllers;

use App\Models\L3Model;
use Illuminate\Http\Request;

class L3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $listes = L3Model::all();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $l3Model = L3Model::findOrFail($id);
        return [
            'id' => $l3Model->id,
            'nom' => $l3Model->candidat->nom,
            'prenom' => $l3Model->candidat->prenom,
            'serie' => $l3Model->candidat->serie,
            'contact' => $l3Model->candidat->contact,
            'situationFamiliale' => $l3Model->candidat->situationFamiliale,
            'nationalite' => $l3Model->candidat->nationalite,
            'nombreEnfant' => $l3Model->candidat->nombreEnfant,
            'adresse' => $l3Model->candidat->adresse,
            'email' => $l3Model->candidat->email,
            'lieuDeNaissance' => $l3Model->candidat->lieuDeNaissance,
            'dateDeNaissance' => $l3Model->candidat->dateDeNaissance,
            'postule' => $l3Model->candidat->postule,
            'genre' => $l3Model->candidat->genre,
            'anneeCandidature' => $l3Model->candidat->annee,
            'matricule' => $l3Model->candidat->matricule,
            'nomPere' => $l3Model->candidat->nomPere,
            'nomMere' => $l3Model->candidat->nomMere,
            'nomTuteur' => $l3Model->candidat->nomTuteur,
            'professionPere' => $l3Model->candidat->professionPere,
            'professionMere' => $l3Model->candidat->professionMere,
            'professionTuteur' => $l3Model->candidat->professionTuteur,
            'telPere' => $l3Model->candidat->telPere,
            'telMere' => $l3Model->candidat->telMere,
            'telTuteur' => $l3Model->candidat->telTuteur,
            'annee' => $l3Model->annee,
            'status' => $l3Model->status,
            'groupe' => $l3Model->groupe,
            'candidat_id' => $l3Model->candidat_id,
            'created_at' => $l3Model->created_at,
            'updated_at' => $l3Model->updated_at,
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\L3Model  $l3Model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, L3Model $l3Model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\L3Model  $l3Model
     * @return \Illuminate\Http\Response
     */
    public function destroy(L3Model $l3Model)
    {
        ($l3Model->delete()) ? response()->json(['success' => 1]) : response()->json(['success' => 0]);
    }
}
