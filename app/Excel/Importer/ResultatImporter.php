<?php

namespace App\Excel\Importer;

use App\Models\Cours;
use App\Models\Etudiant;
use App\Models\Resultat;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;

class EtudiantImporter implements ToCollection {

    use Importable;

    public function collection(Collection $collection)
    {
        foreach($collection as $key => $row) {

            if($key == 0) continue;

            $etudiant = Etudiant::where("matricule", $row[0])->first();
            $cours = Cours::where("intitule", $row[1])->first();

            if(!($etudiant AND $cours)) continue;

            $resultat = Resultat::create([
                "etudiant_id" => $etudiant->id,
                "cours_id" => $cours->id,
                "moyenne" => $row[2],
                "examen" => $row[3],
            ]);
        }
    }
}
