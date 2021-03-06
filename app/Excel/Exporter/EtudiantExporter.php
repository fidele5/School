<?php

namespace App\Excel\Exporter;

use App\Excel\Exporter\Sheets\EtudiantsPerPromotions;
use App\Models\Promotion;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class EtudiantExporter implements WithMultipleSheets {

    use Exportable;


    public function sheets(): array
    {
        $promotions = Promotion::all();
        $sheets = [];

        foreach($promotions as $promotion) {
            $sheets[] = new EtudiantsPerPromotions($promotion);
        }

        return $sheets;
    }
}

?>
