<?php

use App\Models\Horaire;
use App\Models\Promotion;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

function get_day($date){
    setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
    return strftime("%A", $date);
}

function get_weekly_horaire($id){
    return Horaire::join("seances", "horaires.id", "=", "seances.horaire_id")
                    ->join("cours", "seances.cours_id", "=", "cours.id")
                    ->join("enseignants", "cours.enseignant_id", "=", "enseignants.id")
                    ->join("users", "enseignants.user_id", "=", "users.id")
                    ->where('horaires.promotion_id', $id)
                    ->whereBetween('seances.heure_debut', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                    ->get();
}
