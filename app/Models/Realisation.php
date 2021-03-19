<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory;

    protected $fillable = ["categorie_realisation_id", "publication_id",];

    public function categorie_realisation()
    {
        return $this->belongsTo(CategorieRealisation::class);
    }

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }

    public function image_realisations(){
        return $this->hasMany(ImageRealisation::class);
    }
}
