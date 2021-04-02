<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\Filiere;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FilirerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filieres = Filiere::all();
        $arguments = [
            "filieres" => $filieres,
            "selected_item" => "filieres",
            "selected_sub_item" => "all",
        ];
        return view("pages.admin.filieres.index")->with($arguments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arguments = [
            "selected_item" => "filieres",
            "selected_sub_item" => "new",
            "cycles" => Cycle::all()
        ];
        return view("pages.admin.filieres.create")->with($arguments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required",
            "image" => "required|image",
            "cycle_id" => "required|integer",
            "image" => "required|image"
        ]);

        $path = time().".".$request->file('image')->extension();
        $image = Image::make($request->file("image"));
        $image->resize(800, 800);
        $image->save(public_path("uploads/filieres/$path"));

        $filiere = Filiere::create([
            "nom" => $request->nom,
            "description" => $request->description,
            "cycle_id" => $request->cycle_id,
            "image" => $path
        ]);
        return response()->json([
            "status" => "success",
            "back" => "filieres"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function show(Filiere $filiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Filiere $filiere)
    {
        $arguments = [
            "filiere" => $filiere,
            "selected_item" => "filieres",
            "selected_sub_item" => "all",
            "cycles" => Cycle::all()
        ];
        return view("pages.admin.filieres.edit")->with($arguments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filiere $filiere)
    {
        $request->validate(["nom" => "required"]);

        $filiere->nom = $request->nom;
        $filiere->save();

        return response()->json([
            "status" => "success",
            "back" => "filieres"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filiere $filiere)
    {
        $filiere->delete();
        return response()->json([
            "status" => "success",
            "back" => "filieres"
        ]);
    }
}
