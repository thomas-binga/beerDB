<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class producteur extends Model
{

    use HasFactory;
    protected $table = 'Producteur';
    protected $primaryKey = 'Id_Producteur';
    protected $fillable = ['Nom_Producteur'];

}