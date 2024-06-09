<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FreelanceController;

Route::get('/employe-freelance', [FreelanceController::class, 'index'])->name('employe-freelance'); // Liste des freelances
Route::post('/freelance/save', [FreelanceController::class, 'save'])->name('freelance.save'); // Sauvegarde d'un nouveau freelance
Route::get('/freelance/edit/{id}', [FreelanceController::class, 'edit'])->name('freelance.edit'); // Formulaire d'édition d'un freelance existant
Route::put('/freelance/update/{id}', [FreelanceController::class, 'update'])->name('freelance.update'); // Mise à jour d'un freelance existant
Route::get('/freelance/{id}/details', [FreelanceController::class, 'show'])->name('freelance.show'); // Affichage des détails d'un freelance
Route::delete('/freelance/{id}', [FreelanceController::class, 'destroy'])->name('freelance.destroy'); // Suppression d'un freelance

Route::get('/', function () {
    return view('freelance.index');
})->name('acceuil');

Route::get('/freelancer-detail', function () {
    return view('freelance_details.foremployé_freelance_detail');
})->name('freelancer-detail');

Route::get('/freelancer-freelance', function () {
    return view('freelance.foremployé_frelance_freelance');
})->name('freelancer.freelance');

Route::get('/freelance-ok', function () {
    return view('setting.index');
})->name('employe-setting');
