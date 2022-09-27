<?php

namespace App\Http\Controllers;

use App\Models\M2Model;
use Illuminate\Http\Request;

class M2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $listes = M2Model::all();
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
        $m2Model = M2Model::findOrFail($id);
        return [
            'id' => $m2Model->id,
            'nom' => $m2Model->candidat->nom,
            'prenom' => $m2Model->candidat->prenom,
            'serie' => $m2Model->candidat->serie,
            'contact' => $m2Model->candidat->contact,
            'situationFamiliale' => $m2Model->candidat->situationFamiliale,
            'nationalite' => $m2Model->candidat->nationalite,
            'nombreEnfant' => $m2Model->candidat->nombreEnfant,
            'adresse' => $m2Model->candidat->adresse,
            'email' => $m2Model->candidat->email,
            'lieuDeNaissance' => $m2Model->candidat->lieuDeNaissance,
            'dateDeNaissance' => $m2Model->candidat->dateDeNaissance,
            'postule' => $m2Model->candidat->postule,
            'genre' => $m2Model->candidat->genre,
            'anneeCandidature' => $m2Model->candidat->annee,
            'matricule' => $m2Model->candidat->matricule,
            'nomPere' => $m2Model->candidat->nomPere,
            'nomMere' => $m2Model->candidat->nomMere,
            'nomTuteur' => $m2Model->candidat->nomTuteur,
            'professionPere' => $m2Model->candidat->professionPere,
            'professionMere' => $m2Model->candidat->professionMere,
            'professionTuteur' => $m2Model->candidat->professionTuteur,
            'telPere' => $m2Model->candidat->telPere,
            'telMere' => $m2Model->candidat->telMere,
            'telTuteur' => $m2Model->candidat->telTuteur,
            'annee' => $m2Model->annee,
            'status' => $m2Model->status,
            'groupe' => $m2Model->groupe,
            'candidat_id' => $m2Model->candidat_id,
            'created_at' => $m2Model->created_at,
            'updated_at' => $m2Model->updated_at,
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\M2Model  $m2Model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, M2Model $m2Model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\M2Model  $m2Model
     * @return \Illuminate\Http\Response
     */
    public function destroy(M2Model $m2Model)
    {
        ($m2Model->delete()) ? response()->json(['success' => 1]) : response()->json(['success' => 0]);
    }
}
