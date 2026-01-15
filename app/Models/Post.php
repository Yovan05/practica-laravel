<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //si no indico el nombre de la tabla, esta asumira que se debe de 
    // conectar a una tabla con el mismo nombre del archivo pero en minusculas y en plural
    use HasFactory;
    //indicamos en nombre de la tabla
    protected $table = 'posts';
}
