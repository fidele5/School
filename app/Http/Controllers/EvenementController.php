<?php

namespace App\Http\Controllers;

use App\Models\CategorieEvenement;
use App\Models\Evenement;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenements = Evenement::all();
        $arguments = [
            "evenements" => $evenements,
            "selected_item" => "publications_evenements",
            "selected_sub_item" => "all"
        ];
        return view("pages.Admin.evenements.index")->with($arguments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategorieEvenement::all();
        $arguments = [
            "categories" => $categories,
            "selected_item" => "publications_evenements",
            "selected_sub_item" => "new"
        ];
        return view("pages.admin.evenements.create")->with($arguments);
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
            "categorie" => "required|integer",
            "contenu" => "required",
            "debut" => "required",
            "fin" => "required",
            "lieu" => "required",
        ]);

        $image = Image::make($request->file('photo'));
        $image->resize(800, 533);
        $image_name = time().'.'.$image->extension();
        $image->store(public_path("uploads/evenements/"), $image_name);

        $publication = Publication::create([
            "titre" => $request->titre,
            "texte" => $request->contenu,
            "photo" => $image_name,
            "user_id" => Auth::user()->id
        ]);

        $evenement = Evenement::create([
            "publication_id" => $publication->id,
            "categorie_evenement_id" => $request->categorie,
            "date_debut" => $request->debut,
            "date_fin" => $request->fin,
            "lieu" => $request->lieu
        ]);

        return response()->json([
            "status" => "success",
            "back" => "evenements"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function show(Evenement $evenement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function edit(Evenement $evenement)
    {
        $arguments = [
            "evenement" => $evenement,
            "selected_item" => "publications_evenements",
            "selected_sub_item" => "all"
        ];
        return view("pages.admin.evenements.edit")->with($arguments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evenement $evenement)
    {
        $request->validate([
            "titre" => "required",
            "categorie" => "required|number",
            "contenu" => "required",
            "debut" => "required|datetime",
            "fin" => "required|datetime",
            "lieu" => "required"
        ]);

       unlink(public_path("uploads/evenements/".$evenement->publication->photo));

       $image = Image::make($request->file('photo'));
       $image_name = time().'.'.$image->extension();
       $image->save(public_path("uploads/evenements/$image_name"));

        $publication = Publication::find($evenement->publication_id);
        $publication->titre = $request->titre;
        $publication->texte= $request->contenu;
        $publication->photo = $image_name;
        $publication->user_id = Auth::user()->id;
        $publication->save();

        $evenement->categorie_evenement = $request->categorie;
        $evenement->date_debut = $request->debut;
        $evenement->date_fin = $request->fin;
        $evenement->lieu = $request->lieu;
        $evenement->save();

        return response()->json([
            "status" => "success",
            "back" => "evenements"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evenement $evenement)
    {
        $evenement->delete();
        return response()->json([
            "status" => "success",
            "back" => "evenements"
        ]);
    }
}
