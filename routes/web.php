<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsletterController;
use App\Models\Article;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| BACKEND ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware('auth:web', 'verified', 'cacheControl')->group(function () {
    Route::get('/tableau', [BackController::class, 'showTableau'])->name("dashboard");
    //routes articles
    Route::get('/sendannonce', [ArticleController::class, 'createAnnonce'])->name("send-annonce");
    Route::get('/listannonce', [ArticleController::class, 'showAnnonce'])->name("voir-annonce");
    Route::post('/storeArticle', [ArticleController::class, 'storeAnnonce'])->name('store-annonce');
    Route::put('/articles/{id}', [ArticleController::class, 'updateAnnonce'])->name('update-annonce');
    Route::delete('/SupprimerArticle/{article}', [ArticleController::class, 'destroyAnnonce'])->name('delete-annonce');
    //routes blogs
    Route::get('/sendblog', [BlogController::class, 'createBlog'])->name("send-blog");
    Route::get('/listblog', [BlogController::class, 'showBlog'])->name("voir-blog");
    Route::post('/storeBlog', [BlogController::class, 'storeBlog'])->name('store-blog');
    Route::put('/blogs/{id}', [BlogController::class, 'updateBlog'])->name('update-blog');
    Route::delete('/SupprimerBlog/{blog}', [BlogController::class, 'destroyBlog'])->name('delete-blog');
    //routes catégories
    Route::get('/categorie', [CategorieController::class, 'categorie_page'])->name("voir-categorie");
    Route::post('/ajouter-categorie', [CategorieController::class, 'store_categorie'])->name('ajouter-categorie');
});

/*
|--------------------------------------------------------------------------
| Login & Register & Logout
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'login'])->name("page-login");
Route::get('/register', [AuthController::class, 'register'])->name("page-register");
Route::post('/check', [AuthController::class, 'check'])->name("page-check");
Route::post('/create', [AuthController::class, 'createUser'])->name("new-user");
Route::get('/logout', [AuthController::class, 'logout'])->name("logout");
/*
|--------------------------------------------------------------------------
| FRONTEND ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/', [Controller::class, 'home'])->name("accueil");
Route::get('/about', [Controller::class, 'about_us'])->name("apropos");
Route::get('/boutique', [Controller::class, 'shop'])->name("boutique");
Route::get('/blog', [Controller::class, 'view_blog'])->name("blog");
Route::get('/newsletter', [NewsletterController::class, 'showNewsletter'])->name("voir-newsletter");
Route::post('/sendarticles', [NewsletterController::class, 'createNewsletter'])->name('send-newsletter');

Route::get('/detailsarticle/{article}', function (Article $article) {
    return view('pagesclient.detailsarticle', compact('article'));
})->name('shopdetails');

Route::get('/blogdetails/{blog}', function (Blog $blog) {
    return view('pagesclient.blogdetails', compact('blog'));
})->name('blogdetails');