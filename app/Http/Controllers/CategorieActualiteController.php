<?php

namespace App\Http\Controllers;

use App\Models\CategorieActualite;
use Illuminate\Http\Request;

class CategorieActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategorieActualite::all();
        $arguments = [
            "categories" => $categories,
            "selected_item" => "categories_actualites",
            "selected_sub_item" => "all"
        ];
        return view("pages.admin.categories.actualites.index")->with($arguments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arguments = [
            "selected_item" => "categories_actualites",
            "selected_sub_item" => "new"
        ];
        return view('pages.admin.categories.actualites.create')->with($arguments);
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

        $categorie = CategorieActualite::create(['designation'=>$request->designation]);
        return response()->json([
            "status" => "success",
            "back" => "categorie-actualites"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategorieActualite  $categorieActualite
     * @return \Illuminate\Http\Response
     */
    public function show(CategorieActualite $categorieActualite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorieActualite  $categorieActualite
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieActualite $categorieActualite)
    {
        $arguments = [
            "categorie" => $categorieActualite,
            "selected_item" => "categories_actualites",
            "selected_sub_item" => "all"
        ];
        return view("pages.admin.categories.actualites.edit")->with($arguments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategorieActualite  $categorieActualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategorieActualite $categorieActualite)
    {
        $request->validate([
            'designation' => 'required'
        ]);

        $categorieActualite->designation = $request->designation;
        $categorieActualite->save();
        return response()->json([
            "status" => "success",
            "back" => "categorie-actualites"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategorieActualite  $categorieActualite
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorieActualite $categorieActualite)
    {
        $categorieActualite->delete();
        return response()->json([
            "status" => "success",
            "back" => "categorie-actualites"
        ]);
    }
}
