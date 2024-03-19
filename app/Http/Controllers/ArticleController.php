<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function showAnnonce()
    {
        $articles = Article::all();
        return view('pagesadmin.listannonce', compact('articles'));
    }


    public function createAnnonce()
    {
        $categories = Categorie::all();
        return view('pagesadmin.sendannonce', compact('categories'));
    }


    public function storeAnnonce(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $article = new Article();
        $article->nom = $request->input('nom');
        $article->prix = $request->input('prix');
        $article->description = $request->input('description');
        $article->idCategorie = $request->input('idCategorie');

        if ($request->hasFile('image')) {
            $file_image = $request->file('image');
            $file_name_image = "images" . time() . '_' . $file_image->getClientOriginalName();
            $file_image->move(public_path('articlesImages'), $file_name_image);
            $article->image = $file_name_image;
        }
        $article->save();
        return back()->with('success', 'Article ajouté avec succès');
    }


    public function destroyAnnonce($id)
    {
        $article = Article::find($id);
        if (!$article) {
            return back()->with('error', 'L\'article n\'existe pas.');
        }
        if ($article->image) {
            Storage::delete('public/articlesImages/' . $article->image);
        }
        $article->delete();
        return back()->with("success", "Article supprimé");
    }

    
    public function updateAnnonce(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image
        ]);
    
        $article = Article::find($id);
    
        if (!$article) {
            return back()->with('error', 'Article non trouvé');
        }
    
        // Gestion d'image
        if ($request->hasFile('image')) {
            $file_name_image = $request->image->store("articlesImages");
    
            // Supprimez l'ancienne image du serveur si elle existe
            $oldImagePath = public_path($article->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
    
            $article->image = $file_name_image;
        }
    
        // Mettez à jour les autres attributs de l'article en fonction de vos besoins
        $article->nom = $request->input('nom');
        $article->prix = $request->input('prix');
        $article->description = $request->input('description');
    
        $article->save();
    
        return back()->with('success', 'Article ajouté avec succès');
        // return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès');
    }
}
