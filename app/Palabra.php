<?php

namespace Direccion;

use Illuminate\Database\Eloquent\Model;

class Palabra extends Model
{
    protected $table='Palrabas_union';
    protected $primarykey = 'id_pu';
    protected $timestamps = false;

    protected $filleable = [

    	'palabra_union'

    ];

    protected $guarded = [];
}
