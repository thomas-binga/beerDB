<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class beerDB extends Model
{

    use HasFactory;
    protected $table = 'Biere';
    protected $primaryKey = 'Id_Biere';
    /*public function getAllBeers(){
        $bieres = DB::table('Biere')->get();
        return $bieres;
    }*/
}
