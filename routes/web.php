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


Route::get('/', function () {
    return view('freelance.index');
});

Route::get('/freelancer-detail', function () {
    return view('layouts.foremployé_freelance_detail');
})->name('freelancer-detail');

Route::get('/freelance-setting', function () {
    return view('layouts.foremployé_setting');
})->name('employe-setting');

Route::post('/freelance/save', [FreelanceController::class, 'save'])->name('freelance.save');

Route::put('/freelance/{freelance}', [FreelanceController::class, 'update'])->name('freelance.update');





