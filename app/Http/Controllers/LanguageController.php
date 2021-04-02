<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::all();
        return view("pages.admin.language.index")->with("languages", $languages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.admin.language.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $language = new Language();
        $language->fill($request->all());
        if($request->hasFile('flag')){
            $language->flag = $request->flag->move('uploads/flag/', time() . '.' . $request->flag->extension());;
        }
        $language->save();

        if(File::exists(base_path().'/resources/lang/'.$language->iso_code)) {

        }else{
            $create_folder = File::makeDirectory(base_path().'/resources/lang/'.$language->iso_code);
            $base_path = base_path().'/resources/lang/master/pages.php';
            $destination_path = base_path().'/resources/lang/'.$language->iso_code.'/pages.php';
            $success = File::copy($base_path, $destination_path);
        }

        return response()->json([
            "status"=>"success",
            "back"=>"languages"
        ]);
    }

    public function editContent($id)
    {
        $language = Language::findOrFail($id);

        $files   = glob(resource_path('lang/' . $language->iso_code . '/*.php'));
        $language_array = [];


        foreach ($files as $file) {
            $name  = basename($file, '.php');
            $language_array[$name] = require $file;
        }

        return view('pages.admin.language.translate',[
            'language' => Language::findOrFail($id),
            'language_array' => $language_array['pages'],

        ]);
    }

    public function updateContent(Request $request)
    {
        $language =  Language::findOrFail($request->language_id);

        $inputs = $request->except(['_token', 'language_id']);

        $elements = '';
        foreach ($inputs as $key => $value) {
            $elements .= "'".$key."' => '".$value."',\n";
        }

        /** ====== set lan ===== */
        $setArray = "<?php
        return [".$elements."];";

        file_put_contents(base_path("/resources/lang/".$language->iso_code."/pages.php"), $setArray);
        /** ========= end ======== */

        return response()->json([
            "status"=>"success",
            "back"=>"../admin/languages"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($id == 1) {
            return redirect()->back();
        }

        return view("pages.admin.language.edit",[
            'language' => Language::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($id == 1) {
            return response()->json([
                "status"=>"success",
                "back"=>"languages"
            ]);
        }

        $language = Language::findOrFail($id);
        File::deleteDirectory(base_path().'/resources/lang/'.$language->iso_code);
        $language->fill($request->all());
        if($request->hasFile('flag')){
            File::delete($language->flag);
            $language->flag = $request->flag->move('uploads/flag/', str_random(20) . '.' . $request->flag->extension());;
        }
        $language->save();

        if(!File::exists(base_path().'/resources/lang/'.$language->iso_code)) {
           File::makeDirectory(base_path().'/resources/lang/'.$language->iso_code);
            $base_path = base_path().'/resources/lang/master/pages.php';
            $destination_path = base_path().'/resources/lang/'.$language->iso_code.'/pages.php';
             File::copy($base_path, $destination_path);
        }

       return response()->json([
            "status"=>"success",
            "back"=>"../languages"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id == 1){
            return response()->json(["status"=>"failure"]);
        }

        $lang =  Language::findOrFail($id);
        File::deleteDirectory(base_path().'/resources/lang/'.$lang->iso_code);
        $lang->delete();
        return response()->json(["status"=>"success"]);
    }
}
