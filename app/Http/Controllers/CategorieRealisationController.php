<?php

namespace App\Http\Controllers;

use App\Models\CategorieRealisation;
use Illuminate\Http\Request;

class CategorieRealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategorieRealisation::all();
        return view("pages.admin.categories.realisations.index")->with("categories", $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.admin.categories.realisations.create");
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
            "designation" => "required"
        ]);

        $categorie = CategorieRealisation::create(["designation"=>$request->designation]);

        return redirect("categorie-reaclisations.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategorieRealisation  $categorieRealisation
     * @return \Illuminate\Http\Response
     */
    public function show(CategorieRealisation $categorieRealisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorieRealisation  $categorieRealisation
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieRealisation $categorieRealisation)
    {
        return view("pages.admin.categories.realisations.edit")->with("categorie", $categorieRealisation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategorieRealisation  $categorieRealisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategorieRealisation $categorieRealisation)
    {
        $request->validate([
            "designation" => "required"
        ]);

        $categorieRealisation->designation = $request->designation;
        $categorie->save();

        return redirect("categorie-realisations.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategorieRealisation  $categorieRealisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorieRealisation $categorieRealisation)
    {
        $categorieRealisation->delete();
        return redirect("categorie-realisations.index");
    }
}
