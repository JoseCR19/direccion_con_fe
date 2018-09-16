<?php

namespace Direccion;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table = 'Metas';
    protected $primarykey = 'id_m';
    protected $timestamps = false;

    protected $filleable =[

    	'metas_empresariales',
    	'Objetivo_Empresarial_id_oe'
    ];

    protected $guarded = [];
}
