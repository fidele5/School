<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\CategorieActualiteController;
use App\Http\Controllers\CategorieEvenementController;
use App\Http\Controllers\CategorieRealisationController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\CycleController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\FilirerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HoraireController;
use App\Http\Controllers\ImageRealisationController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\ResultatController;
use App\Http\Controllers\SeanceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', [HomeController::class, "welcome"])->name("home");
Route::get('/home', [HomeController::class, "welcome"]);

Auth::routes();

Route::get("/realisation", [HomeController::class, "realisations"])->name('realisation');
Route::get("/evenement", [HomeController::class, 'evenements'])->name('evenement');
Route::get('/actualite', [HomeController::class, 'actualites'])->name("actualite");
Route::get("/horaire", [HomeController::class, "horaires"])->name('horaire');
Route::get("/cours", [HomeController::class, "cours"])->name('cours');
Route::get('/admission', [HomeController::class, 'admission'])->name('admission');
Route::get('/filiere', [HomeController::class, 'filieres'])->name('filiere');
Route::get('/apropos', [HomeController::class, 'apropos'])->name('apropos');
Route::get("/contact", [HomeController::class, 'contact'])->name('contact');
Route::get("/profile", [HomeController::class, 'contact'])->name('profile');
Route::post("/saveStudent", [HomeController::class, 'saveStudent'])->name('saveStudent');
Route::get("/calendrier", [HomeController::class, 'calendar'])->name('calendrier');
Route::middleware("auth", "admin", "active")->group(function () {
    Route::prefix("admin")->group(function () {
        Route::resource("actualites", ActualiteController::class);
        Route::resource('evenements', EvenementController::class);
        Route::resource('realisations', RealisationController::class);
        Route::resource('categorie-actualites', CategorieActualiteController::class);
        Route::resource('categorie-evenements', CategorieEvenementController::class);
        Route::resource('categorie-realisations', CategorieRealisationController::class);
        Route::resource('courses', CoursController::class);
        Route::resource('cycles', CycleController::class);
        Route::resource('enseignants', EnseignantController::class);
        Route::resource('etudiants', EtudiantController::class);
        Route::resource('filieres', FilirerController::class);
        Route::resource('promotions', PromotionController::class);
        Route::resource('horaires', HoraireController::class);
        Route::resource('seances', SeanceController::class);
        Route::resource('publications', PublicationController::class);
        Route::resource('image-realisation', ImageRealisationController::class);
        Route::resource('resultats', ResultatController::class);
        Route::get('etudiants-export', [EtudiantController::class, 'export'])->name('etudiants.export');
        Route::post('etudiants-import', [EtudiantController::class, 'import'])->name('etudiants.import');
        Route::get('enseignants-export', [EnseignantController::class, 'export'])->name('enseignants.export');
        Route::post('enseignants.import', [EnseignantController::class, 'import'])->name('enseignants.import');
        Route::get('resultats-export', [ResultatController::class, 'export'])->name('resultats.export');
        Route::post('resultats-import', [ResultatController::class, 'import'])->name('resultats.import');
        Route::get('', function() {
            return view('pages.admin.home')->with(["selected_item" => "home", "selected_sub_item" => ""]);
        })->name('home-admin');
    });
});
