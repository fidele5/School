<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;

    protected $fillable = ["nom", "description", "image"];

    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }

    public function cycle()
    {
        return $this->belongsTo(Cycle::class);
    }
}
