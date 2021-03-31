<?php

namespace App\Http\Controllers;

use App\Models\CategorieEvenement;
use Illuminate\Http\Request;

class CategorieEvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategorieEvenement::all();
        $arguments = [
            "categories" => $categories,
            "selected_item" => "categories_evenements",
            "selected_sub_item" => "all"
        ];
        return view("pages.admin.categories.evenements.index")->with($arguments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arguments = [
            "selected_item" => "categories_evenements",
            "selected_sub_item" => "new"
        ];
        return view("pages.admin.categories.evenements.create")->with($arguments);
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
            'designation' => 'required'
        ]);
        $categorie = CategorieEvenement::create(['designation' => $request->designation]);
        return response()->json([
            "status" => "success",
            "back" => "categorie-evenements"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategorieEvenement  $categorieEvenement
     * @return \Illuminate\Http\Response
     */
    public function show(CategorieEvenement $categorieEvenement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorieEvenement  $categorieEvenement
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieEvenement $categorieEvenement)
    {
        $arguments = [
            "categorie" => $categorieEvenement,
            "selected_item" => "categories_actualites",
            "selected_sub_item" => "all"
        ];
        return view("pages.Admin.categories.evenements.edit")->with($arguments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategorieEvenement  $categorieEvenement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategorieEvenement $categorieEvenement)
    {
        $request->validate([
            "designation" => 'required'
        ]);

        $categorieEvenement->designation = $request->designation;
        $categorieEvenement->save();

        return response()->json([
            "status" => "success",
            "back" => "categorie-evenements"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategorieEvenement  $categorieEvenement
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorieEvenement $categorieEvenement)
    {
        $categorieEvenement->delete();
        return response()->json([
            "status" => "success",
            "back" => "categorie-evenements"
        ]);
    }
}
