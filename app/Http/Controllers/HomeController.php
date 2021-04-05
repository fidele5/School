<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Caroussel;
use App\Models\CategorieRealisation;
use App\Models\Cycle;
use App\Models\Etudiant;
use App\Models\Evenement;
use App\Models\Filiere;
use App\Models\Horaire;
use App\Models\Realisation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PDF;

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
    public function welcome()
    {
        $actualites = Actualite::orderBy("id", "desc")
            ->take(3)
            ->get();
        $evenements = Evenement::orderBy("id", "desc")
            ->take(3)
            ->get();
        $caroussels = Caroussel::all();
        $categories = CategorieRealisation::all();
        $realisations = Realisation::orderBy("id", "desc")
            ->take(6)
            ->get();
        return view('home')->with(compact("actualites", "evenements", "caroussels", "categories", "realisations"));
    }

    public function index()
    {
        return view("home");
    }

    public function actualites()
    {
        $actualites = Actualite::orderBy('id', 'desc')->paginate(9);
        return view("pages.guest.actualites.actualites")->with("actualites", $actualites);
    }

    public function realisations()
    {
        $categories = CategorieRealisation::all();
        $realisations = Realisation::orderBy("id", "desc")->get();
        return view("pages.guest.realisations.realisations")->with(compact("realisations", "categories"));
    }

    public function evenements()
    {
        $evenements = Evenement::paginate(9);
        return view("pages.guest.evenements.evenements")->with("evenements", $evenements);
    }

    public function filieres()
    {
        $cycles = Cycle::all();
        return view("pages.guest.autres.filiere")->with("cycles", $cycles);
    }

    public function horaires()
    {
        $cycles = Cycle::all();
        $horaire = Horaire::latest()->get();
        return view("pages.guest.autres.horaire")->with(compact("horaire","cycles"));
    }

    public function admission()
    {
        $filieres = Filiere::all();
        return view("pages.guest.autres.admission")->with('filieres', $filieres);
    }

    public function saveStudent(Request $request)
    {
        $matricule = strtolower(date('y').$request->nom[0].$request->postnom[0].mt_rand(0,100));
        $password = Hash::make($request->nom."@".date('Y'));
        $user = User::create([
            "nom"=>$request->nom,
            "postnom"=>$request->postnom,
            "prenom"=>$request->prenom,
            "adresse"=>$request->adresse,
            "nationalite"=>$request->nationalite,
            "genre"=>$request->genre,
            "telephone"=>$request->telephone,
            "email"=>$request->email,
            "password"=>$password,
        ]);
            
        $etudiant = Etudiant::create([
            "promotion_id"=>$request->promotion_id,
            "user_id"=>$user->id,
            "matricule"=>$matricule,
            "lieu_naissance"=>$request->lieu_naissance,
            "date_naissance"=>$request->date_naissance,
            "ecole_provenance"=>$request->ecole_provenance,
            "pourcentage"=>$request->pourcentage,
            "option_laureat"=>$request->option_laureat,
            "annee_laureat"=>$request->annee_laureat,
        ]);

        return response()->json([
            'status'=>'success',
            'id'=>$etudiant->id,
        ]);

    }

    public function downloadPdf($id)
    {
        $etudiant = Etudiant::find($id);
        $pdf = PDF::loadView('pages.guest.autres.fiche', compact('etudiant'))->setPaper('a4');
        $pdf->save(public_path('uploads/fiches/') . $etudiant->matricule . '.pdf');
        return $pdf->download('fiche.pdf');
    }

    public function cours()
    {
        $cycles = Cycle::all();
        return view("pages.guest.autres.cours")->with('cycles', $cycles);
    }

    public function calendar()
    {
        $evenements = Evenement::all();
        $events = array();
        foreach ($evenements as $evenement) {
            $event = array('title' => $evenement->publication->titre, 'start' => $evenement->debut);
            array_push($events, $event);
        }
        return view("pages.guest.autres.calendar")->with("events", $events);
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
