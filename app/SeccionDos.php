<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeccionDos extends Model
{
    protected $table = "seccion_dos";
    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable=[
        'imagen',
        'descripcion',
        'titulo',
 
        'idpagina'
    ];

    protected $guarded=[

    ];
}
