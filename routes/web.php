<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OffreStageController;
use App\Http\Controllers\CondidatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EncadreurController;





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

Route::get('/', function () {

    return view('welcome');
});
 


Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('/offers', [OffreStageController::class, 'index'])->name('offre_stage.index');
Route::get('/offres/{id}', [OffreStageController::class, 'show']);
Route::get('condidats/success', [CondidatController::class, 'success'])->name('condidats.success');
Route::get('condidats/success', [CondidatController::class, 'success'])->name('condidats.success');
Route::get('/offre/{id}/postuler', [CondidatController::class, 'index'])->name('condidats.index');
Route::post('/offre/postuler', [CondidatController::class, 'store'])->name('condidats.store');




// Routes pour l'inscription et la connexion de l'encadreur
Route::get('/encadreur/inscription', [EncadreurController::class, 'showRegistrationForm'])->name('encadreur.inscription');
Route::post('/encadreur/store', [EncadreurController::class, 'store'])->name('encadreur.store');
Route::get('/encadreur/login', [EncadreurController::class, 'showLoginForm'])->name('encadreur.login');
Route::post('/encadreur/authenticate', [EncadreurController::class, 'authenticate'])->name('encadreur.authenticate');

// Routes protégées pour l'encadreur
Route::middleware('auth:encadreur')->group(function () {
    Route::get('/encadreur/dashboard', [EncadreurController::class, 'dashboard'])->name('encadreur.dashboard');
    Route::get('/encadreur/candidats', [EncadreurController::class, 'candidats'])->name('encadreur.candidats');
});





