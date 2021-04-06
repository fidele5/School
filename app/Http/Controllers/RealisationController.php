<?php

namespace App\Http\Controllers;

use App\Models\CategorieRealisation;
use App\Models\Publication;
use App\Models\Realisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $realisations = Realisation::all();
        $arguments = [
            "realisations" => $realisations,
            "selected_item" => "publications_realisations",
            "selected_sub_item" => "all"
        ];
        return view("pages.admin.realisations.index")->with($arguments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategorieRealisation::all();
        $arguments = [
            "categories" => $categories,
            "selected_item" => "publications_realisations",
            "selected_sub_item" => "new"
        ];
        return view("pages.admin.realisations.create")->with($arguments);
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
            "titre" => "required",
            "contenu" => "required",
            "categorie" => "required|integer",
            "photo" => "required|image"
        ]);

        $image = Image::make($request->file("photo"));
        $image->resize(800, 533);
        $image_name = time().".".$request->file("photo")->extension();
        $image->save(public_path("uploads/realisations/$image_name"));

        $publication = Publication::create([
            "titre" => $request->titre,
            "texte" => $request->contenu,
            "photo" => $image_name,
            "user_id" => Auth::user()->id
        ]);

        $realisation = Realisation::create([
            "publication_id" => $publication->id,
            "categorie_realisation_id" => $request->categorie
        ]);

        return response()->json([
            "status" => "success",
            "back" => "realisations"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function show(Realisation $realisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Realisation $realisation)
    {
        $categories = CategorieRealisation::all();
        $arguments = [
            "categories" => $categories,
            "realisation" => $realisation,
            "selected_item" => "publications_realisations",
            "selected_sub_item" => "all"
        ];
        return view("pages.admin.realisations.edit")->with($arguments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Realisation $realisation)
    {
        $request->validate([
            "titre" => "required",
            "contenu" => "required",
            "categorie" => "required|integer",
            "photo" => "required|image"
        ]);

        $fichier = $request->file("photo");
        $image_name = time().".".$fichier->extension();

        unlink(public_path("uploads/realisations/".$realisation->publication->photo));

        $image = Image::make($fichier);
        $image->resize(800, 533);
        $image->save(public_path("uploads/realisations/$image_name"));

        $realisation->publication->texte = $request->contenu;
        $realisation->publication->titre = $request->titre;
        $realisation->publication->photo = $image_name;
        $realisation->publication->save();

        $realisation->categorie_realisation_id = $request->categorie;

        $realisation->save();

        return response()->json([
            "status" => "success",
            "back" => "realisations"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Realisation $realisation)
    {
        $realisation->delete();

        return response()->json([
            "status" => "success",
            "back" => "realisations"
        ]);
    }
}
