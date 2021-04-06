<?php

namespace App\Excel\Exporter\Sheets;

use App\Models\Etudiant;
use App\Models\Promotion;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithProperties;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class EtudiantsPerPromotions implements FromQuery, WithTitle, WithHeadings,
                                        ShouldAutoSize, WithProperties, WithStyles {
    protected $promotion;

    public function __construct(Promotion $promotion) {
        $this->promotion = $promotion;
    }

    public function query()
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
                                ])
                                ->where("etudiants.promotion_id", "=", $this->promotion->id)
                                ->orderBy("users.nom")
                                ->orderBy("users.postnom")
                                ->orderBy("users.prenom");
    }

    public function title(): string
    {
        $titre = sprintf("%s %s", $this->promotion->nom, $this->promotion->filiere->nom);
        return $titre;
    }

    public function headings() : array {
        return [
            "Matricule", "Nom", "Postnom", "Prenom", "Genre", "Nationalité", "Lieu de naissance",
            "Date de naissance", "Ecole de provenance", "option lauréat", "Année lauréat",
            "Pourcentage", "Filière", "Promotion", "Email", "telephone", "Adresse physique"
        ];
    }

    public function properties(): array
    {
        return [
            'creator'        => 'ISAMM FMA',
            'lastModifiedBy' => 'iSAMM FMA',
            'title'          => 'Liste des étudiants',
            'description'    => 'Liste des étudiants',
            'subject'        => 'Liste des étudiants',
            'company'        => 'ISAMM FMA',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true, 'size' => 12]],
        ];
    }
}

?>
