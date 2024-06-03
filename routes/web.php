<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;

Route::get('/', [BienController::class, 'index']);
Route::get('/bien', [bienController::class, 'ListeBien']);

Route::get('bien/ajouter', [BienController::class, 'AjouterBien']);
Route::post('/ajouter/bien-traitement', [BienController::class, 'AjouterBienTraitement']);
Route::get('/detail-bien/{id}', [BienController::class, 'detail_bien']);