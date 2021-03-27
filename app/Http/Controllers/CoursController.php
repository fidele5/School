<?php

namespace App\Http\Controllers;

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
            'ponderation' => ['required', 'integer', 'min:1'],
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
        return view("pages.admin.cours.index")->with("courses", $courses);
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
        $arguments = ["enseignants"=>$enseignants, "promotions"=>$promotions];
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
            "ponderation" => $request->ponderation,
            "desciption" => $request->description,
            "promotion_id" => $request->promotion,
            "enseignant" => $request->enseignant
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
        $arguments = ["enseignants"=>$enseignants, "promotions"=>$promotions, "course" => $cours];
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
        $cours->ponderation = $request->ponderation;
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
}
