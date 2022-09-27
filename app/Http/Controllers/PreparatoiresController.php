<?php

namespace App\Http\Controllers;

use App\Models\Preparatoire;
use Illuminate\Http\Request;

class PreparatoiresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Preparatoire::orderBy('nom')->get();
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
        ]);

        Preparatoire::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'contact' => $request->contact,
        ]);

        return response()->json([
            "success" => '1'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Preparatoire $preparatoire
     * @return \Illuminate\Http\Response
     */
    public function show(Preparatoire $preparatoire)
    {
        return $preparatoire;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Preparatoire $preparatoire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preparatoire $preparatoire)
    {
        $request->validate([
            'nom' => ['required'],
        ]);

        $preparatoire->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'contact' => $request->contact,
        ]);

        return response()->json([
            "success" => 'Updated'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Preparatoire $preparatoire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preparatoire $preparatoire)
    {
        $preparatoire->delete();

        return response()->json([
            "success" => 'deleted'
        ], 200);
    }
}
