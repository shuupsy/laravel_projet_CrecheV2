<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelIndividuel;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\BackaccueilController;
use App\Http\Controllers\FrontaccueilController;
use App\Http\Controllers\ProfilenfantController;
use App\Http\Controllers\MessageenfantsController;
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

Route::get('/backend/{id}/panel',[PanelIndividuel::class,"index"])->name("backIndividuel");

//backend panel
Route::post('backend/{id}/panel/activity',[PanelIndividuel::class,"activity"]);

//backend inventaire
Route::get('/backend/inventaire',[InventairenurseController::class,"index"])->name("backInventaire");
Route::patch('/backend/inventaire/ajouter/{id}',[InventairenurseController::class,"ajouter"]);
Route::patch('/backend/inventaire/diminuer/{id}',[InventairenurseController::class,"diminuer"]);

//backend calendrier
Route::get('/backend/calendrier',[CalendriernurseController::class,"index"])->name("backCalendrier");
Route::get('/backend/calendrier/{id}',[CalendriernurseController::class,"affichageDay"]);

//frontend accueil
Route::get('/frontend/accueil',[FrontaccueilController::class,"index"])->name("frontAccueil");

//frontend calendrier
Route::get('/frontend/calendrier',[CalendrierparentsController::class,"index"])->name("frontCalendrier");
Route::get('/frontend/calendrier/{id}',[CalendrierparentsController::class,"affichageDay"])->name("frontaffichageDay");
//frontend inventaire
Route::get('/frontend/inventaire',[InventaireparentsController::class,"index"])->name("frontInventaire");

//frontend profilEnfant
Route::get('/frontend/profil',[ProfilenfantController::class,"index"])->name("frontProfil");
//frontend messagerie
Route::get('/frontend/messagerie',[MessageenfantsController::class,"index"])->name("frontMessagerie");
Route::post("/frontend/messagerie/envoi/{id}",[MessageenfantsController::class,"store"]);
