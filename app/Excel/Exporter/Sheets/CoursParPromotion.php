<?php

namespace App\Excel\Exporter\Sheets;

use App\Models\Promotion;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class CoursParPromotion implements FromQuery, ShouldAutoSize, WithHeadings, WithTitle, WithStyles {
    protected $promotion;

    public function __construct(Promotion $promotion)
    {
        $this->promotion = $promotion;
    }

    public function query()
    {
        return DB::table('cours')->join('promotions', 'promotions.id', '=', 'cours.promotion_id')
                                ->join('filieres', 'filieres.id', '=', 'promotions.filiere_id')
                                ->select([
                                    "cours.intitule AS Intitulé",
                                    "cours.volume_horaire as 'Volume horaire'",
                                    "cours.description AS Description",
                                    "filieres.nom AS Filiere",
                                    "promotions.nom AS Promotion"
                                ])
                                ->where("promotions.id", "=", $this->promotion->id)
                                ->orderBy("cours.intitule");
    }

    public function headings(): array
    {
        return [
            "Cours", "Volume horaire", "Description", "Filière", "Promotion"
        ];
    }

    public function title(): string
    {
        return $this->promotion->nom.' '.$this->promotion->filiere->nom;
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
