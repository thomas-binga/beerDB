<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producteur;
use App\Models\style;

class TestFormController extends Controller
{
    //
    public function getInfos()
    {
        $styles = style::all();
        $producteurs = producteur::all();
        return view('create', compact(['producteurs', 'styles']));
    }

    public function postInfos(Request $request)
    {   
        dd('vvjj');
        //return 'Le message saisi dans la zone de texte est : ' . $request->input('message');
    }
}
