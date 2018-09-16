<?php

namespace Direccion;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
   protected $table = 'Entrega_valor';
   protected $primarykey='id_ev';
   public $timestamps=false;

   protected $filleable = [

   			'entrega_valor',	
   ];

   protected $guarded =[];
}
