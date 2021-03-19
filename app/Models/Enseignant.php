<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;

    protected $fillable = [
        "grade", "domaine", "user_id",
    ];

    public function cours()
    {
        return $this->hasMany(Cours::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
