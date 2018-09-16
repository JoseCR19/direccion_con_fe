<?php

namespace Direccion;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    protected $table ='Servicios_ti';
    protected $prirmarykey = 'id_st';
    protected $timestamps  = false;

    protected $filleable = [

    	'servicios_ti'
    ]
}
