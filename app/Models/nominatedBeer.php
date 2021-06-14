<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nominatedBeer extends Model
{
    use HasFactory;
    protected $table = 'Biere_Nominee';
    protected $primaryKey = 'Id_Biere';
}
