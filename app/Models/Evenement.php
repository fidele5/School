<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        "publication_id", "categorie_evenement_id", "date_debut", "date_fin", "lieu"
    ];

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }

    public function categorie_evenement()
    {
        return $this->belongsTo(CategorieEvenement::class);
    }
}
