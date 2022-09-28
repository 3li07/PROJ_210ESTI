<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscriptionController extends Controller
{
    /**
     * @param Request $request
     * @param int $id
     * 
     * @return json
     */
    public function inscription(Request $request, int $id)
    {
        //uri = api/candidats/{}/inscription?groupe=..
        $groupe = $request->query('groupe');

        Candidat::findOrFail($id)->update(['status' => 1]);
        $candidat = Candidat::findOrFail($id)->first();
        $table = strtolower($candidat->firstClasse)."_models";
        DB::table($table)->create([
            'annee' => $candidat->annee,
            'candidat_id' => $candidat->id,
            'groupe' => $groupe,
        ]); 
        return response()->json([
            'success' => 1,
        ]);       
    }
}