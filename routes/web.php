<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;
use App\Http\Controllers\CommentaireController;

Route::get('/', [BienController::class, 'index']);
Route::get('/bien', [BienController::class, 'ListeBien']);

Route::get('bien/ajouter', [BienController::class, 'AjouterBien']);
Route::post('/ajouter/bien-traitement', [BienController::class, 'AjouterBienTraitement']);
Route::get('/detail-bien/{id}', [BienController::class, 'detail_bien']);


Route::post('/ajouter/commentaire-traitement', [CommentaireController::class, 'AjouterCommentaireTraitement']);