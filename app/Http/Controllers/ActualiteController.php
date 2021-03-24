<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth;
use App\Models\Actualite;
use App\Models\CategorieActualite;
use App\Models\Publication;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualites = Actualite::all();
        return view('pages.admin.actualites.index')->with("actualites", $actualites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategorieActualite::all();
        return view("pages.admin.actualites.create")->with("categories", $categories);
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
            'photo' => 'required|image',
            'titre' => 'required',
            'contenu' => 'required'
        ]);

        //enregistrement du fichier
        $timestamp = time();
        settype($timestamp, 'string');
        $image = $request->file('photo');
        $image->move('uploads', $timestamp.'.'.$image->extension());

        $publication = Publication::create(
            [
                'titre' => $request->title,
                'texte' => $request->contenu,
                'photo' => $timestamp,
                'user_id' => Auth::user()->id
            ]
        );

        $actualite = Actualite::create([
            'publication_id' => $publication->id,
            'categorie_actualite_id' => $request->categorie
        ]);

        return redirect('actualites.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite)
    {
        return view("pages.admin.actualites.edit")->with("actualite", $actualite);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit(Actualite $actualite)
    {
        echo($actualite->designation);
        return view("pages.admin.actualites.edit")->with("actualite", $actualite);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actualite $actualite)
    {
        $request->validate([
            'photo' => 'required|image',
            'titre' => 'required',
            'contenu' => 'required'
        ]);

        $publication = Publication::find($actualite->publication_id);
        $publication->titre = $request->titre;
        $publication->contenu = $request->contenu;
        $publication->photo = $request->photo;

        $publication->save();

        return redirect("actualites.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actualite $actualite)
    {
        $actualite->delete();

        return redirect("actualites.index");
    }
}
