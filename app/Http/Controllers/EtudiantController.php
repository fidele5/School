<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Promotion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EtudiantController extends Controller
{

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            'postnom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telephone' => ['regex:/(^0[0-9]{9})|(\+[0-9]{12})$/', ],
            "matricule" => "required",
            "promotion" => "required|integer",
            "lieu_naissance" => "required",
            "date_naissance" => "required|date",
            "ecole_provenance" => "required",
            "pourcentage" => "required|regex:/^[0-9.]+$/",
            "option_laureat" => "required",
            "annee_laureat" => "required|integer|min:1900|max:20200",
            "nationalite" => "required"
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view("pages.admin.etudiants.index")->with("etudiants", $etudiants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $promotions = Promotion::all();
        return view("pages.admin.etudiants.create")->with("promotions", $promotions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'nom' => $request->nom,
            'postnom' => $request->postnom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            "genre" => $request->genre,
            'nationalite' => $request->nationalite,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            "is_active" => true
        ]);

        $etudiant = Etudiant::create([
            "matricule" => $request->matricule,
            "promotion_id" => $request->promotion,
            "lieu_naissance" => $request->lieu_naissance,
            "date_naissance" => $request->date_naissance,
            "ecole_provenance" => $request->ecole_provenance,
            "pourcentage" => $request->pourcentage,
            "option_laureat" => $request->option_laureat,
            "annee_laureat" => $request->annee_laureat,
            "user_id" => $user->id
        ]);

        return redirect(route("etudiants.index"));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        $promotions = Promotion::all();
        $arguments = ["promotions" => $promotions, "etudiant" => $etudiant];
        return view("pages.admin.etudiants.edit")->with($arguments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->user->nom = $request->nom;
        $etudiant->user->postnom = $request->postnom;
        $etudiant->user->prenom = $request->prenom;
        $etudiant->user->genre = $request->genre;
        $etudiant->user->email = $request->nationalite;
        $etudiant->user->telephone = $request->telephone;
        $etudiant->user->nationalite = $request->nationalite;
        $etudiant->user->adresse = $request->adresse;
        $etudiant->user->save();

        $etudiant->lieu_naissance = $request->lieu_naissance;
        $etudiant->date_naissance = $request->date_naissance;
        $etudiant->ecole_provenance = $request->ecole_provenance;
        $etudiant->matricule = $request->matricule;
        $etudiant->option_laureat = $request->option_laureat;
        $etudiant->annee_laureat = $request->annee_laureat;
        $etudiant->pourcentage = $request->pourcentage;
        $etudiant->save();

        return redirect(route("etudiants.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect(route("etudiants.index"));
    }
}
