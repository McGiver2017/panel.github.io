<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class archivo extends Model
{
    protected $fillable = [
        'descripcion', 'archivo', 'tipo'
    ];
    public function getArchivoAttribute( $imagen ){
        if(!$imagen || starts_with($imagen,'http')){
            return $imagen;
        }
        return Storage::disk('public')->url($imagen);
    }
}
