<?php

namespace App\Http\Controllers;

use App\Models\Horaire;
use Illuminate\Http\Request;

class HoraireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horaires = Horaire::all();
        $arguments = [
            "horaires" => $horaires,
            "selected_item" => "filieres",
            "selected_sub_item" => "all"
        ];

        return view("pages.admin.horaires.index")->with($arguments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arguments = [
            "selected_item" => "horaires",
            "selected_sub_item" => "new"
        ];
        return view("pages.admin.horaires.create")->with($arguments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horaire = Horaire::create($request->except("_token", "_method"));
        return response()->json([
            "status" => "success",
            "back" => "horaires"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horaire  $horaire
     * @return \Illuminate\Http\Response
     */
    public function show(Horaire $horaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horaire  $horaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Horaire $horaire)
    {
        $arguments = [
            "selected_item" => "horaires",
            "selected_sub_item" => "new",
            "horaire" => $horaire
        ];
        return view("pages.admin.horaires.edit")->with($arguments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horaire  $horaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horaire $horaire)
    {
        $horaire->debut = $request->debut;
        $horaire->fin = $request->fin;
        $horaire->description = $request->description;

        $horaire->save();

        return response()->json([
            "status" => "success",
            "back" => "../horaires"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horaire  $horaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horaire $horaire)
    {
        $deleted = $horaire->delete();

        if($deleted) {
            return response()->json([
                "status" => "success"
            ]);
        } else {
            return response($status=500);
        }
    }
}
