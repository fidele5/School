<?php

namespace App\Excel\Exporter;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ResultatExporter implements FromCollection, WithHeadings,  ShouldAutoSize, WithStyles {

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

    public function headings(): array
    {
        return [
            "Matricule", "Cours", "Moyenne", "Examen"
        ];
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
