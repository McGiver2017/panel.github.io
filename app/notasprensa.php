<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class notasprensa extends Model
{
    protected $fillable = [
        'titulo','titular','cuerpo', 'fecha', 'imagen','ver-mas'
    ];
    public function getImagenAttribute( $imagen ){
        if(!$imagen || starts_with($imagen,'http')){
            return $imagen;
        }
        return Storage::disk('public')->url($imagen);
    }
}
