<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BienController extends Controller
{
    public function ListeBien(){
       $biens = Bien::all ();
         return view('bien/index', compact('biens'));


    }
     public function AjouterBien(){
        return view ('bien/ajouter');

     }
    public function ModifierBien($id)
    {
        $biens = Bien::findOrFail($id);
        return view('bien/modifier', compact('biens'));

    }
        public function AjouterBienTraitement(Request $request){

        $request->validate([
            'nom' => 'required',
            'categorie' => 'required',
            'image' => 'required', // Validation d'image si elle est fournie
            'description' => 'required',
            'adresse' => 'required',
            'statut' => 'required|boolean',
            'date_ajout' => 'required',
        ]);

        $bien =new Bien();
        $bien->nom = $request->nom;
        $bien->categorie = $request->categorie;
        $bien->image = $request->input('image');
        $bien->description = $request->description;
        $bien->adresse = $request->adresse;
        $bien->statut = $request->input('statut')[0] ?? false;
        $bien->date_ajout = $request->date_ajout;
        $bien->save();

        return redirect('/bien')->with('status', "Le bien a bien été ajouté avec succés.");
    }

    public function ModifierBienTraitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'categorie' => 'required',
            'image' => 'required', // Validation d'image si elle est fournie
            'description' => 'required',
            'adresse' => 'required',
            'statut' => 'required|boolean',
            'date_ajout' => 'required',
        ]);

        $bien = Bien::findOrFail($request->id);
        $bien->nom = $request->nom;
        $bien->categorie = $request->categorie;
        $bien->image = $request->input('image');
        $bien->description = $request->description;
        $bien->adresse = $request->adresse;
        $bien->statut = $request->input('statut')[0] ?? false;
        $bien->date_ajout = $request->date_ajout;
        $bien->update();

        return redirect('/bien')->with('status', "Le bien a bien été modifié avec succés.");
    }



    // public function ModifierBienTraitement(Request $request) {
    //     // dd($request->all() );

    //     $request->validate([
    //         'nom' => 'required',
    //         'description' => 'required',
    //         'statut' => 'required',
    //         'image' => 'required',
    //     ]);
    //     $bien = Bien::find($request->id);
    //     $bien ->nom = $request->nom;
    //     $bien ->description = $request->description;
    //     $bien->image = $request->input('image');
    //     $bien ->statut = $request->statut;
    //     $bien ->update();
    //     return redirect('/bien')->with('status',"Le bien a bien été modifié avec succès");

 

    public function modifierTraitement(Request $request, $id)
{
    // Validation des données
    $request->validate([
        'nom' => 'required',
        'categorie' => 'required',
        'image' => 'required', // Validation d'image si elle est fournie
        'description' => 'required',
        'adresse' => 'required',
        'statut' => 'required|boolean',
        'date_ajout' => 'required',
    ]);

    // Récupérer le bien spécifique par son identifiant
    $bien = Bien::find($id);

    // Vérifier si le bien existe
    if (!$bien) {
        return redirect('/bien')->with('error', "Le bien n'a pas été trouvé.");
    }

    // Mise à jour des attributs du bien
    $bien->nom = $request->nom;
    $bien->categorie = $request->categorie;
    $bien->image = $request->input('image');
    $bien->description = $request->description;
    $bien->adresse = $request->adresse;
    $bien->statut = $request->boolean('statut');
    $bien->date_ajout = $request->date_ajout;

    // Sauvegarder les modifications
    $bien->save();

    // Rediriger avec un message de succès
    return redirect('/bien')->with('status', "Le bien a bien été modifié avec succès.");
}


    public function SupprimerBien($id)
    {
        $bien = Bien::findOrFail($id);

        // Suppression de l'image si elle existe
        if ($bien->image) {
            Storage::delete($bien->image);
        }

        $bien->delete();

        return redirect('/bien')->with('status', "Le bien a bien été supprimé avec succés.");
    }
}
