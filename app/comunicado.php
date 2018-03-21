<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comunicado extends Model
{
    protected $fillable = [
        'titular','descripcion', 'fecha', 'ver-mas'
    ];
}
