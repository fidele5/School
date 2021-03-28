<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EnseignantController extends Controller
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
            "domaine" => "required",
            "grade" => "required",
            "nationalite" => "required",
            "genre" => "required|length:1"
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enseignants = Enseignant::all();
        $arguments = [
            "enseignants" => $enseignants,
            "selected_item" => "enseignants",
            "selected_sub_item" => "all"
        ];
        return view("pages.admin.enseignants.index")->with($arguments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arguments = [
            "selected_item" => "enseignants",
            "selected_sub_item" => "new"
        ];
        return view("pages.admin.enseignants.create")->with($arguments);
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
            "nom" => $request->nom,
            "postnom" => $request->postnom,
            "prenom" => $request->prenom,
            "genre" => $request->genre,
            "nationalite" => $request->nationalite,
            "email" => $request->email,
            "telephone" => $request->telephone,
            "password" => Hash::make("isam2021"),
            "adresse" => $request->adresse
        ]);

        $enseignant = Enseignant::create([
            "user_id" => $user->id,
            "grade" => $request->grade,
            "domaine" => $request->domaine
        ]);

        return response()->json([
            "status" => "success",
            "back" => "enseignants"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function show(Enseignant $enseignant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function edit(Enseignant $enseignant)
    {
        $arguments = [
            "enseignant" => $enseignant,
            "selected_item" => "enseignants",
            "selected_sub_item" => "all"
        ];
        return view("pages.admin.enseignants.index")->with($arguments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enseignant $enseignant)
    {
        $enseignant->user->nom = $request->nom;
        $enseignant->user->postnom = $request->postnom;
        $enseignant->user->prenom = $request->prenom;
        $enseignant->user->genre = $request->genre;
        $enseignant->user->email = $request->nationalite;
        $enseignant->user->telephone = $request->telephone;
        $enseignant->user->nationalite = $request->nationalite;
        $enseignant->user->adresse = $request->adresse;
        $enseignant->user->save();

        $enseignant->grade = $request->grade;
        $enseignant->domaine = $request->domaine;
        $enseignant->save();

        return response()->json([
            "status" => "success",
            "back" => "enseignants"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enseignant $enseignant)
    {
        $enseignant->user->delete();
        $enseignant->delete();
        return response()->json([
            "status" => "success",
            "back" => "enseignants"
        ]);
    }
}
