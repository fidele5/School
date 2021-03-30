<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use App\Models\Cours;
use App\Models\Horaire;
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
            'heure_fin' => ['required', 'datetime'],
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
