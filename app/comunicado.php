<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class comunicado extends Model
{
    protected $fillable = [
        'titular','descripcion', 'fecha', 'ver-mas','imagen'
    ];
    public function getImagenAttribute( $imagen ){
        if(!$imagen || starts_with($imagen,'http')){
            return $imagen;
        }
        return Storage::disk('public')->url($imagen);
    }
}
