<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use Illuminate\Http\Request;

class BienController extends Controller
{
    public function ListeBien(){
        $biens = Bien::all();
        return view('bien/index', compact('biens'));
    }

    public function AjouterBien(){
        return view('bien/ajouter');
       }
    
    public function AjouterBienTraitement(Request $request){
        /*dd($request->all());*/
        $request->validate([
            'nom' => 'required',
            'categorie' => 'required',
            'image' => 'required',
            'description' => 'required',
            'adresse' => 'required',
            'statut' => 'required|boolean',
            'date_ajout' => 'required',
        ]);
    
        $bien = new Bien();
        $bien->nom = $request->nom;
        $bien->categorie = $request->categorie;
        $bien->image = $request->input('image');/*Assure l'affichage de l'image via l'url*/
        $bien->description = $request->description;
        $bien->adresse = $request->adresse;
        $bien->statut = $request->input('statut')[0] ?? false;
        $bien->date_ajout = $request->date_ajout;
        $bien->save();
    
        return redirect('/bien')->with('status', "Le bien a bien été ajouté avec succés.");
       }

}
