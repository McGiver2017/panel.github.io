<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class convocatoria extends Model
{
    protected $fillable = [
        'descripcion', 'fecha_convocatoria', 'bases_perfiles','resultados'
    ];
}
