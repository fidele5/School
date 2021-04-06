<?php

namespace App\Http\Controllers;

use App\Excel\Exporter\CoursExporter;
use App\Models\Cours;
use App\Models\Enseignant;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CoursController extends Controller
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
            'intitule' => ['required', 'string', 'max:255'],
            'volume_horaire' => ['required', 'integer', 'min:15'],
            'promotion' => "required",
            'enseignant' => "required",
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Cours::all();
        $arguments = [
            "courses" => $courses,
            "selected_item" => "cours",
            "selected_sub_item" => "all"
        ];
        return view("pages.admin.cours.index")->with($arguments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enseignants = Enseignant::all();
        $promotions = Promotion::all();
        $arguments = [
            "enseignants"=>$enseignants,
            "promotions"=>$promotions,
            "selected_item" => "cours",
            "selected_sub_item" => "new"
        ];
        return view("pages.admin.cours.create")->with($arguments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cours = Cours::create([
            "intitule" => $request->intitule,
            "volume_horaire" => $request->volume_horaire,
            "description" => $request->description,
            "promotion_id" => $request->promotion,
            "enseignant_id" => $request->enseignant,
        ]);

        return response()->json([
            "status" => "success",
            "back" => "courses"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function show(Cours $cours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function edit(Cours $cours)
    {
        $enseignants = Enseignant::all();
        $promotions = Promotion::all();
        $arguments =[
            "enseignants"=>$enseignants,
            "promotions"=>$promotions,
            "course" => $cours,
            "selected_item" => "cours",
            "selected_sub_item" => "all"
        ];
        return view("pages.admin.cours.edit")->with($arguments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cours $cours)
    {
        $cours->intitule = $request->intitule;
        $cours->description = $request->description;
        $cours->volume_horaire = $request->volume_horaire;
        $cours->promotion_id = $request->promotion;
        $cours->enseignant_id = $request->enseignant;

        return response()->json([
            "status" => "success",
            "back" => "courses"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cours $cours)
    {
        $cours->delete();
        return response()->json([
            "status" => "success",
            "back" => "courses"
        ]);
    }

    public function export() {
        return (new CoursExporter)->download("cours.xls");
    }

    public function import(Request $request) {
        $request->validate([
            "file" => "required|file|mimes:xls,xlsx,xlsm"
        ]);

        return response()->json([
            "status" => "success",
            "back" => "courses"
        ]);
    }
}
