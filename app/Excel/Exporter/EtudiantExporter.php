<?php

namespace App\Excel\Exporter;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EtudiantExporter implements FromCollection, ShouldAutoSize, WithHeadingRow {

    use Exportable;

    public function collection()
    {
        return DB::table('users')->join('etudiants', 'users.id', "=", 'etudiants.user_id')
                                ->join('promotions', 'etudiants.promotion_id', '=', 'promotions.id')
                                ->join('filieres', 'promotions.filiere_id', '=', 'filieres.id')
                                ->select([
                                    "etudiants.matricule AS Matricule",
                                    "users.nom AS Nom",
                                    "users.postnom AS Postnom",
                                    "users.prenom AS Prenom",
                                    "users.genre AS Genre",
                                    "users.nationalite AS Nationalité",
                                    "etudiants.lieu_naissance AS 'Lieu de naissance'",
                                    "etudiants.date_naissance AS 'Date de naissance'",
                                    "etudiants.ecole_provenance AS 'Ecole de provenance",
                                    "etudiants.option_laureat AS 'Option Lauréat'",
                                    "etudiants.annee_laureat AS 'Année Lauréat",
                                    "etudiants.pourcentage AS 'Pourcentage",
                                    "filieres.nom as Filiere",
                                    "promotions.nom as Promotion",
                                    "users.email as Email",
                                    "users.telephone as telephone",
                                    "users.adresse AS 'Adresse physique'"
                                ])->get();
    }

    public function headings() : array {
        return [
            "Matricule", "Nom", "Postnom", "Prenom", "Genre", "Nationalité", "Lieu de naissance",
            "Date de naissance", "Ecole de provenance", "option lauréat", "Année lauréat",
            "Pourcentage", "Filière", "Promotion", "Email", "telephone", "Adresse physique"
        ];
    }
}

?>
