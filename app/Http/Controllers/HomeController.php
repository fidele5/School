<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Evenement;
use App\Models\Filiere;
use App\Models\Horaire;
use App\Models\Realisation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function actualites()
    {
        $actualites = Actualite::orderBy('id', 'desc')->paginate(9);
        return view("pages.guest.actualites.actualites")->with("actualites", $actualites);
    }

    public function realisations()
    {
        $realisations = Realisation::orderBy("id", "desc")->paginate(12);
        return view("pages.guest.realisations.realisations")->with("realisations", $realisations);
    }

    public function evenements()
    {
        $evenements = Evenement::paginate(9);
        return view("pages.guest.evenements.evenements")->with("evenements", $evenements);
    }

    public function filieres()
    {
        $filieres = Filiere::all();
        return view("pages.guest.autres.filiere")->with("filieres", $filieres);
    }

    public function horaires()
    {
        $horaire = Horaire::latest()->get();
        return view("pages.guest.autres.horaire")->with("horaire", $horaire);
    }

    public function admission()
    {
        # code ...
    }

    public function cours()
    {
        # code...
    }

    public function apropos()
    {
        return view("pages.guest.autres.about");
    }

    public function contact()
    {
        return view("pages.guest.autres.contact");
    }
}
