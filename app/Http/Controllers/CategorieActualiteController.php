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
        return view("pages.admin.categories.actualites.index")->with("categories", $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.categories.actualites.create');
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
        return redirect('categorie-actualites.index');
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
        echo($categorieActualite->designation);
        return view("pages.admin.categories.actualites.edit")->with("categorie", $categorieActualite);
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
        $categorie->save();
        return redirect("categorie-actualites.index");
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
        return redirect("categorie-actualites.index");
    }
}
