<?php

namespace App\Excel\Exporter;

use App\Excel\Exporter\Sheets\CoursParPromotion;
use App\Models\Promotion;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class CoursExporter implements WithMultipleSheets {

    use Exportable;

    public function sheets(): array
    {
        $sheets = [];
        $promotions = Promotion::all();
        foreach($promotions as $promotion) {
            $sheets[] = new CoursParPromotion($promotion);
        }

        return $sheets;
    }

}

?>
