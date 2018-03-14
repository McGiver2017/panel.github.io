<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mensajedoc extends Model
{
    protected $fillable = [
        'dni','nombres','apellidos','domicilio', 'correo','telefono', 'tipo', 'tipo_usuario', 'tipo_incidencia','detalle'
    ];
}
