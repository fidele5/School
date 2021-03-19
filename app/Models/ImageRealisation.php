<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageRealisation extends Model
{
    use HasFactory;

    protected $fillable = ["uri", "realisation_id"];

    public function realisation()
    {
        return $this->belongsTo(Realisation::class);
    }
}
