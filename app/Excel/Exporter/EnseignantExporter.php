<?php

namespace App\Excel\Exporter;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;

class EnseignantExporter implements FromCollection {

    use Exportable;

    public function collection()
    {
        return DB::table('users')->join('enseignants', 'users.id', "=", 'enseignants.user_id')
                                ->select([
                                    "users.nom AS Nom",
                                    "users.postnom AS Postnom",
                                    "users.prenom AS Prenom",
                                    "users.genre AS Genre",
                                    "users.nationalite AS Nationalité",
                                    "enseignants.grade AS Grade",
                                    "enseignants.domaine AS Domaine",
                                    "users.email as Email",
                                    "users.telephone as telephone",
                                    "users.adresse AS 'Adresse physique'"
                                ])->get();
    }
}

?>
