<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    public function showTableau (){
        return view ('pagesadmin.tableau');
    }
}
