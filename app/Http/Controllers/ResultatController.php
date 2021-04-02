<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Etudiant;
use App\Models\Resultat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ResultatController extends Controller
{
    protected function validator(array $datas) {
        return Validator::make($datas, [
            "etudiant_id" => "required|integer",
            "cours_id" => "required|integer",
            "moyenne" => "required|numeric",
            "examen" => "required|numeric"
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
            "resultats" => Resultat::all(),
            "selected_item" => "resultats",
            "selected_sub_item" => "all"
        ];

        return view("pages.admin.resultats.index")->with($arguments);
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
            "etudiants" => Etudiant::all(),
            "selected_item" => "resultats",
            "selected_sub_item" => "new"
        ];

        return view("pages.admin.resultats.create")->with($arguments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resultat = Resultat::create($request->except("_token", "_method"));

        return response()->json([
            "status" => "success",
            "back" => "resultats"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resultat  $resultat
     * @return \Illuminate\Http\Response
     */
    public function show(Resultat $resultat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resultat  $resultat
     * @return \Illuminate\Http\Response
     */
    public function edit(Resultat $resultat)
    {
        $arguments = [
            "courses" => Cours::all(),
            "etudiants" => Etudiant::all(),
            "resultat" => $resultat,
            "selected_item" => "resultats",
            "selected_sub_item" => "new"
        ];

        return view("pages.admin.resultats.create")->with($arguments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resultat  $resultat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resultat $resultat)
    {
        $resultat->update($resultat->except("_token", "_method"));

        return response()->json([
            "status" => "success",
            "back" => "resultats"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resultat  $resultat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resultat $resultat)
    {
        $resultat->delete();

        return response()->json([
            "status" => "success"
        ]);
    }

    public function export() {

    }

    public function import(Request $request) {

    }
}
