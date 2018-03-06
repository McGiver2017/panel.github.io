<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comunicado extends Model
{
    protected $fillable = [
        'descripcion', 'fecha', 'ver-mas'
    ];
}
