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
            $nombre_jour = $row[7] - 25569;
            $time_jour = $nombre_jour * 24 * 3600;
            $date_naissance = date("Y-m-d", $time_jour);

            if($key == 0) continue;

            try {
                $filiere = Filiere::where("nom", $row[12])->first();
                $promotion = Promotion::where(["nom" => $row[13], "filiere_id" => $filiere->id])->first();
            } catch(Exception $exception) {
                print($exception->getMessage().'\n');
                continue;
            }

            if(!($filiere AND $promotion)) continue;
            $user = User::create([
                "nom" => $row[1],
                "postnom" => $row[2],
                "prenom" => $row[3],
                "genre" => $row[4],
                "nationalite" => $row[5],
                "email" => $row[14],
                "telephone" => $row[15],
                "adresse" => $row[16]
            ]);

            $old_date = $row[7];

            $etudiant = Etudiant::create([
                "user_id" => $user->id,
                "matricule" => $row[0],
                "lieu_naissance" => $row[6],
                "date_naissance" => $date_naissance,
                "ecole_provenance" => $row[8],
                "option_laureat" => $row[9],
                "annee_laureat" => $row[10],
                "pourcentage" => $row[11],
                "promotion_id" => $promotion->id
            ]);
        }
    }
}
