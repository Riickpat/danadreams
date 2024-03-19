<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    //Afficher blog
    public function showBlog()
    {
        $blogs = Blog::all();
        return view('pagesadmin.listblog', compact('blogs'));
    }


    //creer un blog
    public function createBlog()
    {
        return view('pagesadmin.sendblog');
    }


    //valider un blog
    public function storeBlog(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = new Blog();
        $blog->titre = $request->input('titre');
        $blog->description = $request->input('description');

        if ($request->hasFile('image')) {
            $file_image = $request->file('image');
            $file_name_image = "images" . time() . '_' . $file_image->getClientOriginalName();
            $file_image->move(public_path('articlesImages'), $file_name_image);
            $blog->image = $file_name_image;
        }
        $blog->save();
        return back()->with('success', 'Blog publié avec succès');
    }


    //supprimer un blog
    public function destroyBlog($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return back()->with('error', 'Le blog n\'existe pas.');
        }
        if ($blog->image) {
            Storage::delete('public/articlesImages/' . $blog->image);
        }
        $blog->delete();
        return back()->with("success", "Blog supprimé");
    }


    //modifier un blog
    public function updateBlog(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = Blog::find($id);

        if (!$blog) {
            return back()->with('error', 'Blog non trouvé');
        }

        if ($request->hasFile('image')) {
            $file_name_image = $request->image->store("articlesImages");
            $oldImagePath = public_path($article->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
            $blog->image = $file_name_image;
        }

        $blog->titre = $request->input('nom');
        $blog->description = $request->input('description');

        $blog->save();

        return back()->with('success', 'Blog modifié');
    }
}
