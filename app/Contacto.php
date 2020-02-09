<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = "contacto";
    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable=[
        'nombres',
        'correo',
        'telefono',
        'mensaje',
        'idpagina'
    ];

    protected $guarded=[

    ];
}
