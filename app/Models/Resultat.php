<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    use HasFactory;

    protected $fillable = ["cours_id", "etudiant_id", "moyenne", "examen"];

    public function cours() {
        return $this->belongsTo(Cours::class);
    }

    public function etudiant() {
        return $this->belongsTo(Etudiant::class);
    }
}
