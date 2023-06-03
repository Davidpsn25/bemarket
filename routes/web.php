<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;



Route::get('/', function () {return view('welcome');});

//Route::get('/nivel1', function (){return view('layouts/nivel1');});

//Route::get('/nivel1', [Controller::class, 'valor_nv1'])->name('valor_nv1');

//Route::view('/nivel1','layouts/nivel1');
Route::get('/nivel1', [Controller::class, 'ShowNivel1'])->name('nivel1');




Route::get('/broker1', function () {return view('/layouts/broker1');})->middleware(['auth', 'verified'])->name('broke');

Route::get('/dashboard', function () {return view('/dashboard1');})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




