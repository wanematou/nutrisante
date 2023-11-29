<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function accueil()
    {
        return view ('pages.front-office.accueil');
    }

   

public function afficherArticles(Request $request, $id)
    {
        $user = User::find($id);
        return view('pages.front-office.article', ['user' => $user]);
    }

    
public function apropos()
{
       return view('pages.front-office.apropos');
}

public function formps()
{
       return view('pages.front-office.formps');
}

}
