<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FreelanceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/employe-freelance', [FreelanceController::class, 'index'])->name('employe-freelance');
Route::post('/freelance/save', [FreelanceController::class, 'save'])->name('freelance.save');
Route::get('/freelance/edit/{id}', [FreelanceController::class, 'edit'])->name('freelance.edit');
Route::put('/freelance/{id}', [FreelanceController::class, 'update'])->name('freelance.update');


Route::get('/', function () {
    return view('freelance.index');
});

Route::get('/freelancer-detail', function () {
    return view('layouts.foremployé_freelance_detail');
})->name('freelancer-detail');

Route::get('/freelancer-freelance', function () {
    return view('layouts.foremployé_frelance_freelance');
})->name('freelancer.freelance');

Route::get('/freelance-setting', function () {
    return view('layouts.foremployé_setting');
})->name('employe-setting');








