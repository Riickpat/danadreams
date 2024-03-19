<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Blog;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    public function about_us()
    {
        return view('pagesclient.about');
    }

    // public function shop_details()
    // {
    //     return view('pagesclient.detailsarticle');
    // }

    public function home()
    {
        $articlesHomme = Article::all()->where('idCategorie', 1);
        $articlesFemme = Article::all()->where('idCategorie', 2);
        $articlesAccessoire = Article::all()->where('idCategorie', 3);
        $articlesTechnologie = Article::all()->where('idCategorie', 4);
        return view('pagesclient.home', compact('articlesHomme', 'articlesFemme', 'articlesAccessoire','articlesTechnologie'));
    }

    public function shop()
    {
        $articles = Article::all();
        return view('pagesclient.boutique', compact('articles'));
    }

    public function view_blog()
    {
        $blogs = Blog::all();
        return view('pagesclient.blog', compact('blogs'));
    }
}