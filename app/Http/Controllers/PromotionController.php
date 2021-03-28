<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotion::all();
        $arguments = [
            "promotions" => $promotions,
            "selected_item" => "promotions",
            "selected_sub_item" => "all"
        ];
        return view("pages.admin.promotions.index")->with($arguments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filieres = Filiere::all();
        $arguments = [
            "filieres" => $filieres,
            "selected_item" => "promotions",
            "selected_sub_item" => "new"
        ];
        return view("pages.admin.promotions.create")->with($arguments);
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
            "filiere" => "required|integer"
        ]);

        $promotion = Promotion::create([
            "nom" => $request->nom,
            "filiere_id" => $request->filiere
        ]);

        return response()->json([
            "status" => "success",
            "back" => "promotions"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion)
    {
        $filieres = Filiere::all();
        $arguments = [
            "filieres" => $filieres,
            "promotion" => $promotion,
            "selected_item" => "promotions",
            "selected_sub_item" => "all"
        ];
        return view("pages.admin.promotions.edit")->with($arguments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promotion $promotion)
    {
        $request->validate([
            "nom" => "required",
            "filiere" => "required|integer"
        ]);

        $promotion->nom = $request->nom;
        $promotion->filiere_id = $request->filiere;
        $promotion->save();

        return response()->json([
            "status" => "success",
            "back" => "promotions"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();

        return response()->json([
            "status" => "success",
            "back" => "promotions"
        ]);
    }
}
