<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieRealisation extends Model
{
    use HasFactory;

    protected $fillable = ["designation"];

    public function realisations()
    {
        return $this->hasMany(Realisation::class);
    }
}
