<?php

namespace App\Http\Controllers;

use App\Models\M1Model;
use Illuminate\Http\Request;

class M1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $listes = M1Model::all();
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
        $m1Model = M1Model::findOrFail($id);
        return [
            'id' => $m1Model->id,
            'nom' => $m1Model->candidat->nom,
            'prenom' => $m1Model->candidat->prenom,
            'serie' => $m1Model->candidat->serie,
            'contact' => $m1Model->candidat->contact,
            'situationFamiliale' => $m1Model->candidat->situationFamiliale,
            'nationalite' => $m1Model->candidat->nationalite,
            'nombreEnfant' => $m1Model->candidat->nombreEnfant,
            'adresse' => $m1Model->candidat->adresse,
            'email' => $m1Model->candidat->email,
            'lieuDeNaissance' => $m1Model->candidat->lieuDeNaissance,
            'dateDeNaissance' => $m1Model->candidat->dateDeNaissance,
            'postule' => $m1Model->candidat->postule,
            'genre' => $m1Model->candidat->genre,
            'anneeCandidature' => $m1Model->candidat->annee,
            'matricule' => $m1Model->candidat->matricule,
            'nomPere' => $m1Model->candidat->nomPere,
            'nomMere' => $m1Model->candidat->nomMere,
            'nomTuteur' => $m1Model->candidat->nomTuteur,
            'professionPere' => $m1Model->candidat->professionPere,
            'professionMere' => $m1Model->candidat->professionMere,
            'professionTuteur' => $m1Model->candidat->professionTuteur,
            'telPere' => $m1Model->candidat->telPere,
            'telMere' => $m1Model->candidat->telMere,
            'telTuteur' => $m1Model->candidat->telTuteur,
            'annee' => $m1Model->annee,
            'status' => $m1Model->status,
            'groupe' => $m1Model->groupe,
            'candidat_id' => $m1Model->candidat_id,
            'created_at' => $m1Model->created_at,
            'updated_at' => $m1Model->updated_at,
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\M1Model  $m1Model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, M1Model $m1Model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\M1Model  $m1Model
     * @return \Illuminate\Http\Response
     */
    public function destroy(M1Model $m1Model)
    {
        ($m1Model->delete()) ? response()->json(['success' => 1]) : response()->json(['success' => 0]);
    }
}
