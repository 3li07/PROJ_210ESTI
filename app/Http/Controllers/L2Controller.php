<?php

namespace App\Http\Controllers;

use App\Models\L2Model;
use Illuminate\Http\Request;

class L2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $listes = L2Model::all();
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $l2Model = L2Model::findOrFail($id);
        return [
            'id' => $l2Model->id,
            'nom' => $l2Model->candidat->nom,
            'prenom' => $l2Model->candidat->prenom,
            'serie' => $l2Model->candidat->serie,
            'contact' => $l2Model->candidat->contact,
            'situationFamiliale' => $l2Model->candidat->situationFamiliale,
            'nationalite' => $l2Model->candidat->nationalite,
            'nombreEnfant' => $l2Model->candidat->nombreEnfant,
            'adresse' => $l2Model->candidat->adresse,
            'email' => $l2Model->candidat->email,
            'lieuDeNaissance' => $l2Model->candidat->lieuDeNaissance,
            'dateDeNaissance' => $l2Model->candidat->dateDeNaissance,
            'postule' => $l2Model->candidat->postule,
            'genre' => $l2Model->candidat->genre,
            'anneeCandidature' => $l2Model->candidat->annee,
            'matricule' => $l2Model->candidat->matricule,
            'nomPere' => $l2Model->candidat->nomPere,
            'nomMere' => $l2Model->candidat->nomMere,
            'nomTuteur' => $l2Model->candidat->nomTuteur,
            'professionPere' => $l2Model->candidat->professionPere,
            'professionMere' => $l2Model->candidat->professionMere,
            'professionTuteur' => $l2Model->candidat->professionTuteur,
            'telPere' => $l2Model->candidat->telPere,
            'telMere' => $l2Model->candidat->telMere,
            'telTuteur' => $l2Model->candidat->telTuteur,
            'annee' => $l2Model->annee,
            'status' => $l2Model->status,
            'groupe' => $l2Model->groupe,
            'candidat_id' => $l2Model->candidat_id,
            'created_at' => $l2Model->created_at,
            'updated_at' => $l2Model->updated_at,
        ];

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\L2Model  $l2Model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, L2Model $l2Model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\L2Model  $l2Model
     * @return \Illuminate\Http\Response
     */
    public function destroy(L2Model $l2Model)
    {
        ($l2Model->delete()) ? response()->json(['success' => 1]) : response()->json(['success' => 0]);
    }
}
