<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;
    protected $fillable = ["publication_id", "categorie_actualite_id"];

    public function categorie_actualite()
    {
        return $this->belongsTo(CategorieActualite::class);
    }
}
