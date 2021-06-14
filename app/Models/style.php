<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class style extends Model
{

    use HasFactory;
    protected $table = 'Style';
    protected $primaryKey = 'Id_Style';
    protected $fillable = ['Nom_Style','Couleur'];

}