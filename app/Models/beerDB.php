<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class beerDB extends Model
{
    use HasFactory;
    public function getAllBeers(){
        $bieres = DB::table('Biere')->get();
        return $bieres;
    }
}
