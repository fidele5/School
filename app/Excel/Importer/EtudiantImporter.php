<?php

namespace App\Excel\Importer;

use \App\Models\Etudiant;
use App\Models\Filiere;
use App\Models\Promotion;
use App\Models\User;
use Exception;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;

class EtudiantImporter implements ToCollection {

    use Importable;

    public function collection(Collection $collection)
    {
        foreach($collection as $key => $row) {
            if($key == 0) continue;

            try {
                $filiere = Filiere::where("nom", $row[11])->first();
                $promotion = Promotion::where(["nom" => $row[12], "filiere_id" => $filiere->id])->first();
            } catch(Exception $exception) {
                continue;
            }

            print("$filiere, $promotion");

            if(!($filiere AND $promotion)) continue;
            $user = User::create([
                "nom" => $row[1],
                "postnom" => $row[2],
                "prenom" => $row[3],
                "genre" => $row[4],
                "nationalite" => $row[5],
                "email" => $row[13],
                "telephone" => $row[14],
                "adresse" => $row[15]
            ]);

            $etudiant = Etudiant::create([
                "user_id" => $user->id,
                "lieu_naissance" => $row[6],
                "date_naissance" => $row[7],
                "ecole_provenance" => $row[8],
                "option_laureat" => $row[9],
                "annee_laureat" => $row[10],
                "promotion_id" => $promotion->id
            ]);
        }
    }
}
