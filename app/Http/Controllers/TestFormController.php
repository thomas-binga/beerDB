<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestFormController extends Controller
{
    //
    public function getInfos()
    {
        return view('create');
    }

    public function postInfos(Request $request)
    {   
        dd('vvjj');
        //return 'Le message saisi dans la zone de texte est : ' . $request->input('message');
    }
}
