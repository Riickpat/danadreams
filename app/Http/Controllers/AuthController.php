<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class AuthController extends Controller
{
    public function login()
    {
        return view('pagesauth.login');
    }
    public function register()
    {
        return view('pagesauth.register');
    }



    /*VALIDER LA REQUETE INSCRIPTION*/
    public function createUser(request $request)
    {
        $request->validate([
            'name' => 'required',
            'firstname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:12',
        ]);

        /*SI LE FORMULAIRE EST VALIDE, ENREGISTRER UN NOUVEL UTILISATEUR*/

        $user = new User();
        $user->name = $request->name;
        $user->firstname = $request->firstname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $query = $user->save();


        if ($query) {
            return redirect()->route('page-login')->with('success', 'Votre compte à été créé avec succès');
        } else {
            return back()->with('echec', 'Email ou mot de passe incorrect');
        }
    }



    /*VALIDER REQUETE LOGIN */
    public function check(request $request)
    {

        $message = [
            "email.required" => "Votre email est requis",
            "email.exists" => "Votre email est invalide",
            "password.required" => "Le mot de passe est requis",
            "password.min" => "Le mot de passe est trop court",
        ];

        $validator = Validator::make($request->all(), [
            "email" => "bail|required|email|exists:users,email",
            "password" => "bail|required|min:8|max:50",
        ], $message);
        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required|min:6|max:12',
        // ]);

        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        //     $user = Auth::user();
        //     Session::put('loggedUser', $user->id);
        //     return redirect()->route('dashboard');
        // } else {
        //     return back()->with('echec', 'Email ou mot de passe incorrect');
        // }

        if ($validator->fails()) {
            // dd($validator->errors()->first());
            return redirect()->back()->with('fail', $validator->errors()->first());
        }
        $creds = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($creds)) {
            // return redirect()->route('dashboard')->with('success', 'login');
            return redirect()->route('dashboard')->with('success', 'Vous êtes connecté.');
        }
    }

    /** DECONNEXION */
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('page-login')->with('deconnecté');
    }
}
