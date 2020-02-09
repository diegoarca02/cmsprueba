<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigItem extends Model
{
    protected $table = "config_item";
    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable=[
        'titulo',
        'icono',
        'enlace',
        'idmenu',
       
    ];

    protected $guarded=[

    ];
}
