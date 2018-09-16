<?php

namespace Direccion;

use Illuminate\Database\Eloquent\Model;

class ObjetivoTI extends Model
{
    protected $table = 'Objetivo_empresarial_TI';
    protected $primarykey = 'id_oeti';
    protected $timestamps = false;
    
    protected $filleable = [

    	'Palabras_union_id_pu',
    	'Metas_id_m',
    	'Servicios_ti_id_st',
    	'Entrega_Valor_id_ev'
    ];

    protected $guarded = [];
}
