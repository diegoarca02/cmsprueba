<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = "slider";
    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable=[
        'titulo',
        'imagen',
        'idpagina'
    ];

    protected $guarded=[

    ];
}
