<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = ["titre", "texte", "user_id", "photo"];

    public function actualites()
    {
        return $this->hasMany(Actualite::class);
    }

    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }

    public function realisations()
    {
        return $this->hasMany(Realisation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
