<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use App\Models\Cours;
use App\Models\Horaire;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SeanceController extends Controller
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
            'heure_debut' => ['required', 'datetime'],
            'heure_fin' => ['required', 'datetime', 'after:heure_debut'],
            'horaire_id' => ['required', 'integer'],
            'cours_id' => ['required', 'integer'],
            'description' => ['required', ]
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arguments = [
            "seances" => Seance::all(),
            "selected_item" => "seances",
            "selected_sub_item" => "all"
        ];

        return view("pages.admin.seances.index")->with($arguments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arguments = [
            "courses" => Cours::all(),
            "horaires" => Horaire::all(),
            "selected_item" => "seances",
            "selected_sub_item" => "new"
        ];

        return view("pages.admin.seances.create")->with($arguments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horaire = Horaire::find($request->horaire_id);
        $cours_promotion = $horaire->promotion->cours;
        $cours = Cours::find($request->cours_id);

        $date_debut = $horaire->debut;
        $date_fin = $horaire->fin;

        $heure_debut = $request->heure_debut;
        if($heure_debut >= $date_debut AND $heure_debut <= $date_fin)
            return back()->with("heure_debut", "L'heure de début n'est pas dans le delai de l'horaire");

        $heure_fin = $request->heure_fin;
        if($heure_fin >= $date_debut AND $heure_fin <= $date_fin)
            return back()->with("heure_fin", "L'heure de fin n'est pas dans le delai de l'horaire");

        if(!(in_array($cours, $cours_promotion)))
            return back()->with("cours", "Le cours selectionné n'est pas inscrit dans la promotion");
        $seance = Seance::create($request->except("_token", "_method"));

        return response()->json([
            "status" => "success",
            "back" => "seances"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function show(Seance $seance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function edit(Seance $seance)
    {
        $arguments = [
            "courses" => Cours::all(),
            "horaires" => Horaire::all(),
            "selected_item" => "seances",
            "selected_sub_item" => "all",
            "seance" => $seance
        ];

        return view("pages.admin.seances.edit")->with($arguments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seance $seance)
    {
        $seance->update($request->except("_token", "_method"));

        return response()->json([[
            "status" => "success",
            "back" => "../seances"
        ]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seance $seance)
    {
        $deleted = $seance->delete();
        if($deleted) {
            return response()->json(["status" => "success"]);
        } else {
            return response($status=500);
        }
    }
}
