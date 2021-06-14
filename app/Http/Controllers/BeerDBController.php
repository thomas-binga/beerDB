<?php

namespace App\Http\Controllers;

use App\Models\beerDB;
use Illuminate\Http\Request;
use App\Http\Requests\InsertBeerRequest;

class BeerDBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$beer = new beerDB();
        $beer = $beer->getAllBeers();*/
        $beer = BeerDB::all();
        return view('index', compact('beer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //On retourne la vue contenant le formulaire "create"
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\InsertBeerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertBeerRequest $request)
    {
        //
        beerDB::create($request->all());
        return view('confirm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\beerDB  $beerDB
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $beer = BeerDB::find($id);
        return view('info', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\beerDB  $beerDB
     * @return \Illuminate\Http\Response
     */
    public function edit(beerDB $beerDB)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\beerDB  $beerDB
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, beerDB $beerDB)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\beerDB  $beerDB
     * @return \Illuminate\Http\Response
     */
    public function destroy(beerDB $beerDB)
    {
        //
    }
}
