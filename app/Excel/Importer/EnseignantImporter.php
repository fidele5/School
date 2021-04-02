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
                "nom" => $row[1],
                "postnom" => $row[2],
                "prenom" => $row[3],
                "genre" => $row[4],
                "nationalite" => $row[5],
                "email" => $row[8],
                "telephone" => $row[9],
                "adresse" => $row[10]
            ]);

            $enseignant = Enseignant::create([
                "user_id" => $user->id,
                "grade" => $row[6],
                "domaine" => $row[7],
            ]);
        }
    }
}
