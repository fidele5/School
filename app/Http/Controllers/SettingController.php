<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Language::all();
        $settings = Setting::all();
        $arguments = [
            "selected_item" => "settings",
            "selected_sub_item" => "general",
            "languages" => $languages,
            "settings"=>$settings,
        ];

        return view("pages.admin.settings.general")->with($arguments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $inputs = $request->except("_token");
        $keys = [];

        foreach ($inputs as $k => $v) {
            $keys[$k] = $k;
        }

        DB::table('settings')->truncate();

        foreach ($inputs as $key => $value) {

            if ($request->hasFile('app_logo') && $key == 'app_logo') {
                $val = $request->app_logo->move('img/', time() . '.' . $request->app_logo->extension());
                Setting::firstOrCreate(['option_key' => $key, "option_value" => $val]);
            } elseif ($request->hasFile('app_fav_icon') && $key == 'app_fav_icon') {
                $val = $request->app_fav_icon->move('img/', time() + 1 . '.' . $request->app_fav_icon->extension());
                Setting::firstOrCreate(['option_key' => $key, "option_value" => $val]);
            } else {
                $val = $value;
                Setting::firstOrCreate(['option_key' => $key, "option_value" => $val]);
            }

            /**  ====== Set Language ====== */
            session(['local' => $request->app_language]);
            \Illuminate\Support\Facades\App::setLocale(session()->get('local'));

            Artisan::call('cache:clear');
        }

        return response()->json([
            "status" => "success",
            "back" => "../admin/settings/create",
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
