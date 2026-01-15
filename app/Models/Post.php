<?php

namespace App\Models;

use Dotenv\Parser\Value;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //si no indico el nombre de la tabla, esta asumira que se debe de 
    // conectar a una tabla con el mismo nombre del archivo pero en minusculas y en plural
    use HasFactory;
    //indicamos en nombre de la tabla
    protected $table = 'posts';

    protected function title():Attribute{
        return Attribute::make(
            //El metodo set lo ejecuta antes de guardarlo en la base de datos
            set: function($value){
                //strtolower cambia todo a minusculas
                return strtolower($value);
            },
            //El metodo get se cuando se recibe informacion de la base de datos 
            get: function($value){
                //ucfirst la primera palabra de cada letra a mayuscula
                return ucfirst($value);
            }
        );
    }
}
