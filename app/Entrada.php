<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table = "entrada";
    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable=[
        'slug',
        'titulo',
        'contenido',
        'idpagina'
    ];

    protected $guarded=[

    ];
}
