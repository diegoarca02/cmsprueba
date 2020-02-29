<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigGeneral extends Model
{
    protected $table = "config_general";
    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable=[
        'fuente',
        'size',
        'logo',
        'fondo_principal',
        'titulo',
        'favion',
        'mapa',
        'fondo',
        'idpagina'
    ];

    protected $guarded=[

    ];
}
