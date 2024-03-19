<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsletterRequest;
use App\Models\Newsletter;
use PhpParser\Node\Stmt\TryCatch;

class NewsletterController extends Controller
{

    public function createNewsletter(Request $request) {
    $existingEmail = Newsletter::where('email', $request->email)->first();

    if ($existingEmail) {
        return redirect()->back()->with('failure', 'Cet email ou numéro est déjà enregistré.');
    }

    Newsletter::create([
        'email' => $request->email,
        'telephone' => $request->telephone,
    ]);

    return redirect()->back()->with('success', 'Votre email et numéro ont bien été enregistré.');
}



    // Afficher une newsletter
    public function showNewsletter()
    {
        $abonnes = Newsletter::all();
        return view('pagesadmin.newsletter', ['newsletter' => $abonnes]);
    }

}
