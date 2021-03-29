<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
    use HasFactory;

    protected $fillable = ["description", "debut", "fin", "promotion"];

    public function seances()
    {
        return $this->hasMany(Seance::class);
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }
}
