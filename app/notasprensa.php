<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notasprensa extends Model
{
    protected $fillable = [
        'titulo','cuerpo', 'fecha', 'imagen','ver-mas'
    ];
}
