<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CandidatsImport implements ToArray, WithHeadingRow 
{
    use Importable;

    /**
     * @param mixed $valeur
     * 
     * @return aray [$nom ,$prenom]
     */
    public function takeClasseAndGroupe($valeur)
    {
        $split_group = [];
        $dd = (str_split($valeur,2));
        $classe = $dd[0];
        foreach($dd as $k => $split){
            if($k != 0){
                $split_group[] = $split;
            }
        }
        $groupe = implode("",$split_group);
        return [$classe, $groupe];
    }


    /**
     * @param mixed $valeur
     * 
     * @return array [$classe,$groupe]
     */
    public function takeNomEtPrenom($valeur)
    {
        $prenom = "";
        $nom_prenom = [];
        $expl_firstname = [];
        $nom_prenom = explode(" ",$valeur);
        $nom = $nom_prenom[0];
          
        foreach($nom_prenom as $k => $expl_fullname){
            if($k != 0 ){
                $expl_firstname[] = $expl_fullname;
            };
        }
        if(!is_null($expl_firstname)){
            $prenom = implode("",$expl_firstname);         
        }

        return [$nom,$prenom];
    }

    /**
    * @param Collection $collection
    */
    public function array(array $data)
    {
        $classe_groupe = $this->takeClasseAndGroupe($data[0][0]);
        foreach($data as $k => $row){
            if($k != 0){
                $nom_prenom = $this->takeNomEtPrenom($row['noms_de_letudiant']);
                DB::table(strtolower($classe_groupe[0])."_models")->insert([
                
               ]);
            }
        }
    }
}
