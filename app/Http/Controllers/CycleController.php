<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CycleController extends Controller
{
    protected function validator(array $datas) {
        return Validator::make($datas, [
            "designation" => "required|max:165"
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arguments = [
            "cycles" => Cycle::all(),
            "selected_item" => "cycles",
            "selected_sub_item" => "all"
        ];

        return view("pages.admin.cycles.index")->with($arguments);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arguments = [
            "selected_item" => "cycles",
            "selected_sub_item" => "new"
        ];

        return view("pages.admin.cycles.create")->with($arguments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cycle::create(["designation" => $request->designation]);

        return response()->json([
            "status" => "success",
            "back" => "cycles"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function show(Cycle $cycle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function edit(Cycle $cycle)
    {
        $arguments = [
            "selected_item" => "cycles",
            "selected_sub_item" => "all",
            "cycle" => $cycle
        ];

        return view("pages.admin.cycles.edit")->with($arguments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cycle $cycle)
    {
        $cycle->designation = $request->designation;
        $cycle->save();

        return response()->json([
            "status" => "success",
            "back" => "cycles"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cycle $cycle)
    {
        $cycle->delete();

        return response()->json([
            "status" => "success"
        ]);
    }
}
