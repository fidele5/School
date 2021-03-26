<?php

namespace App\Http\Controllers;

use App\Models\CategorieRealisation;
use App\Models\Publication;
use App\Models\Realisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view("pages.admin.realisations.index")->with("realisations", $realisations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategorieRealisation::all();
        return view("pages.admin.realisations.create")->with("categories", $categories);
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

        $image_name = time();
        settype($image_name, "string");
        $request->file("photo")->move("uploads/realisations", $image_name);

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

        return redirect(route("realisations.index"));
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
        return view("pages.admin.realisations.edit")->with([
            "realisation"=> $realisation,
            "categories" => $categories
        ]);
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

        $image_name = time();
        settype($image_name, "string");
        $request->file("photo")->move("uploads/realisations", $image_name);

        $realisation->publication->texte = $request->contenu;
        $realisation->publication->titre = $request->titre;
        $realisation->publication->photo = $image_name;
        $realisation->publication->save();

        $realisation->categorie_realisation_id = $request->categorie;

        $realisation->save();

        return redirect(route("realisations.index"));
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

        return redirect(route("realisations.index"));
    }
}
