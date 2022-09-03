<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelIndividuel;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\BackaccueilController;
use App\Http\Controllers\FrontaccueilController;
use App\Http\Controllers\CalendriernurseController;
use App\Http\Controllers\InventairenurseController;
use App\Http\Controllers\CalendrierparentsController;
use App\Http\Controllers\InventaireparentsController;

//accueil connexion
Route::get('/',[ConnexionController::class,"index"]);
//creation account
Route::post('/connexion',[ConnexionController::class,"store"]);

//backend accueil
Route::get('/backend/nurseAccueil',[BackaccueilController::class,"index"])->name("backAccueil");
Route::post('/backend/{id}/panel/{nom}_{prenom}',[PanelIndividuel::class,"index"])->name("backIndividuel");
//backend inventaire
Route::get('/backend/inventaire',[InventairenurseController::class,"index"])->name("backInventaire");
//backend calendrier
Route::get('/backend/calendrier',[CalendriernurseController::class,"index"])->name("backCalendrier");

//frontend accueil
Route::get('/frontend/accueil',[FrontaccueilController::class,"index"])->name("frontAccueil");
//frontend calendrier
Route::get('/frontend/calendrier',[CalendrierparentsController::class,"index"])->name("frontCalendrier");
//frontend inventaire
Route::get('/frontend/inventaire',[InventaireparentsController::class,"index"])->name("frontInventaire");
