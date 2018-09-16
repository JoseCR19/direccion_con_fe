<?php

namespace Direccion;

use Illuminate\Database\Eloquent\Model;

class Objetivo extends Model
{
    protected $table = 'Objetivo_Empresarial';
    protected $primarykey = 'id_oe';
    protected $timestamps = false;

    protected $filleable = [

    	'objetivo_empresarial'
    ]

    protected $guarded = [];
}
