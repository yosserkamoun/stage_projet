<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OffreStageController;


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
Route::get('/', [OffreStageController::class, 'index']);

Route::prefix('admin')->middleware(['auth:admins'])->group(function () {
    Route::get('/offre_stages/create', [OffreStageController::class, 'create'])->name('offre_stages.create');
    Route::post('/offre_stages', [OffreStageController::class, 'store'])->name('offre_stages.store');
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Route pour afficher une offre de stage spécifique
Route::get('/offre_stages/{id}', [OffreStageController::class, 'show'])->name('offre_stages.show');
