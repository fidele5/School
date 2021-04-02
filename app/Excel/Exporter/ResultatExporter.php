<?php

namespace App\Excel\Exporter;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;

class ResultatExporter implements FromCollection {

    use Exportable;

    public function collection()
    {
        return DB::table('resultats')->join('etudiants', 'etudiants.id', "=", 'resultats.etudiant_id')
                                ->join('cours', 'cours_id', '=', 'resultats.cours_id')
                                ->select([
                                    "etudiants.matricule AS Matricule",
                                    "cours.intitule AS Cours",
                                    "resultats.moyenne AS Moyenne",
                                    "resultats.examen AS Examen",
                                ])->get();
    }
}

?>
