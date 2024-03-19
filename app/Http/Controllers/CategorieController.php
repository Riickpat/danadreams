<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function categorie_page()
    {
        $categories = Categorie::all();
        return view('pagesadmin.categorie', compact('categories'));
    }


    // Ajouter une categorie
    public function store_categorie(Request $request)
    {
        // Validation des données
        $request->validate([
            'libelle' => 'required|string|max:255',
        ]);

        // Création d'une nouvelle catégorie
        $categorie = new Categorie();
        $categorie->libelle = $request->input('libelle');

        // Sauvegarde de la catégorie
        $categorie->save();

        // Redirection avec message de succès
        return redirect()->route('voir-categorie')->with('success', 'Catégorie ajoutée avec succès');
    }

}
