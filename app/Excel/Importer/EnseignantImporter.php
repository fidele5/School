<?php

namespace App\Excel\Importer;

use App\Models\Enseignant;
use App\Models\Filiere;
use App\Models\Promotion;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;

class EnseignantImporter implements ToCollection {

    use Importable;

    public function collection(Collection $collection)
    {
        foreach($collection as $key => $row) {

            if($key == 0) continue;

            $user = User::create([
                "nom" => $row[0],
                "postnom" => $row[1],
                "prenom" => $row[2],
                "genre" => $row[3],
                "nationalite" => $row[4],
                "email" => $row[7],
                "telephone" => $row[8],
                "adresse" => $row[9]
            ]);

            $enseignant = Enseignant::create([
                "user_id" => $user->id,
                "grade" => $row[5],
                "domaine" => $row[6],
            ]);
        }
    }
}
