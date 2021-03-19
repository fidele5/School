<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        "promotion_id", 
        "user_id", 
        "matricule", 
        "lieu_naissance", 
        "date_naissance",
        "ecole_provenance", 
        "pourcentage", 
        "option_laureat", 
        "annee_laureat",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }
}
