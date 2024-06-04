<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;

Route::get('/', [BienController::class, 'index']);
Route::get('/bien', [BienController::class, 'ListeBien']);

Route::get('bien/ajouter', [BienController::class, 'AjouterBien']);
Route::post('/ajouter/bien-traitement', [BienController::class, 'AjouterBienTraitement']);
Route::get('/detail-bien/{id}', [BienController::class, 'detail_bien']);


// route pour la modification de biens
Route::post('/modifier/bien-traitement/', [BienController::class, 'ModifierBienTraitement']);
Route::get('/modifier-bien/{id}', [BienController::class, 'ModifierBien']);

// Route::post('traitement' ,[BienController::class , 'ModifierTraitement']);

