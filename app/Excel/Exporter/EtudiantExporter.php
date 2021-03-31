<?php

namespace App\Excel\Exporter;

use Maatwebsite\Excel\Concerns\FromCollection;
use \App\Models\Etudiant;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;

class EtudiantExporter implements FromCollection {
    
    use Exportable;

    public function collection()
    {
        return DB::raw("SELECT etudiants.matricule as Matricule, users.nom as Nom, users.postnom as Postnom, users.prenom as Prenom
        users.genre as Genre, users.nationalite as Nationalite,  etudiants.lieu_naissance as 'Lieu de naissance',
        etudiants.date_naissance as 'Date de naissance', etudiants.ecole_provenance as 'Ecole de provenance',
        etudiants.option_laureat as 'Option lauréat', etudiants.annee_laureat as 'Année Lauréat', etudiants.pourcentage as pourcentage,
        users.email as Email, filieres.nom as Filiere, promotions.nom as Promotion,  users.telephone as Telephone, users.adresse as Adresse
        FROM users INNER JOIN etudiants ON users.id = etudiants.user_id INNER JOIN promotions ON etudiants.promotion_id = promotions.id INNER JOIN filieres ON promotion.filiere_id = filieres.id");
    }
}

?>
