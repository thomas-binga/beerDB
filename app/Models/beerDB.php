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
    protected $fillable = ['Nom_Biere', 'Prix_Biere', 'Contenance_Biere', 'Degre_alccol_Biere', 'Description', 'Id_Style', 'Id_Producteur', 'Image_Biere'];
}
