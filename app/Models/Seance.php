<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    protected $fillable = ["heure_debut", "heure_fin", "cours_id", "horaire_id", ];

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }

    public function horaire()
    {
        return $this->belongsTo(Horaire::class);
    }
}
