<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blog";
    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable=[
        'slug',
        'imagen',
        'titulo',
        'excerpt',
        'contenido',
        'idpagina'
    ];

    protected $guarded=[

    ];
}
