<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mensajedoc extends Model
{
    protected $fillable = [
        'nombres','apellidos', 'correo', 'tipo','asunto','mensaje'
    ];
}
