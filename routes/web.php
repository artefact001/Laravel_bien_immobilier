<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;
use App\Http\Controllers\CommentaireController;

Route::get('/', [BienController::class, 'index']);
Route::get('/bien', [BienController::class, 'ListeBien']);

Route::get('bien/ajouter', [BienController::class, 'AjouterBien']);
Route::post('/ajouter/bien-traitement', [BienController::class, 'AjouterBienTraitement']);
Route::get('/detail-bien/{id}', [BienController::class, 'DetailBien']);


// route pour la modification de biens
Route::post('/modifier/bien-traitement/', [BienController::class, 'ModifierBienTraitement']);
Route::get('/modifier-bien/{id}', [BienController::class, 'ModifierBien']);

// Route::post('traitement' ,[BienController::class , 'ModifierTraitement']);

Route::post('/ajouter/commentaire-traitement', [CommentaireController::class, 'AjouterCommentaireTraitement']);

// route pour la suppression de biens

Route::get('/supprimer-bien/{id}', [BienController::class, 'SupprimerBien'])
// ->name('bien.delete')
;

