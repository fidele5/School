<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Actualite;
use App\Models\CategorieActualite;
use App\Models\Publication;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
        $arguments = [
            "actualites" => $actualites,
            "selected_item" => "publications_actualites",
            "selected_sub_item" => "all"
        ];
        return view('pages.admin.actualites.index')->with($arguments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategorieActualite::all();
        $arguments = [
            "categories"=>$categories,
            "selected_item" => "publications_actualites",
            "selected_sub_item" => "new"
        ];
        return view("pages.admin.actualites.create")->with($arguments);
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
        $photo = $request->file('photo');
        $timestamp = time();
        settype($timestamp, 'string');
        $image = Image::make($photo);
        $image->resize(800, 533);
        $image_name = $timestamp.'.'.$photo->extension();
        $image->save(public_path("/uploads/actualites/$image_name"));

        $publication = Publication::create(
            [
                'titre' => $request->titre,
                'texte' => $request->contenu,
                'photo' => $image_name,
                'user_id' => Auth::user()->id
            ]
        );

        $actualite = Actualite::create([
            'publication_id' => $publication->id,
            'categorie_actualite_id' => $request->categorie
        ]);

        return response()->json([
            "status" => "success",
            "back" => "actualites"
        ]);
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
        $categories = CategorieActualite::all();
        $arguments = [
            "categories"=>$categories,
            "selected_item" => "publications_actualites",
            "selected_sub_item" => "all",
            "actualite" => $actualite
        ];
        return view("pages.admin.actualites.edit")->with($arguments);
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

        unlink(public_path("uploads/actualites/".$actualite->publication->photo));

        $publication = Publication::find($actualite->publication_id);
        $publication->titre = $request->titre;
        $publication->contenu = $request->contenu;
        
        $image = Image::make($request->file('photo'));
        $image->resize(800, 533);
        $image_name = time().'.'.$image->extension();
        $image->save("uploads/actualites/$image_name");
        $publication->photo = $image_name;

        $publication->save();

        return response()->json([
            "status" => "success",
            "back" => "actualites"
        ]);
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
        return response()->json([
            "status" => "success",
            "back" => "actualites"
        ]);
    }
}
