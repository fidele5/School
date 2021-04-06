<?php

namespace App\Excel\Exporter;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class EnseignantExporter implements FromCollection, WithHeadings, ShouldAutoSize, WithTitle, WithStyles {

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

    public function headings(): array
    {
        return [
            "Nom", "Postnom", "Prenom", "Genre", "Nationalité", "Grade", "Domaine", "Email",
            "Telephone", "Adresse physique"
        ];
    }

    public function title(): string
    {
        return "Enseignants";
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true, "size" => 12]],
        ];
    }
}

?>
