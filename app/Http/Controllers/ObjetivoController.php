<?php

namespace Direccion\Http\Controllers;

use Illuminate\Http\Request;
use Direccion\Objetivo;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use DB;

class ObjetivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {

    }
    public function index(Request $request)
    {
    if($request)
    {

       $objetivo=DB::table('Objetivo_Empresarial as oe')
       ->select('oe.objetivo_empresarial as objetivo','id_oe as id')
       ->orderby('id_oe','asc')
       ->paginate(10);

       return view('objetivos_empresariales.ob.index',["objetivo"=>$objetivo]);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
   {
        $objetivo=DB::table('Objetivo_Empresarial as oe')
        ->select('oe.objetivo_empresarial as objetivo','id_oe as ide')
        ->get();
        $palabra=DB::table('Palabras_union as pu')
        ->select('pu.palabra_union as pu','pu.id_pu as idp')
        ->get();
        $sistema=DB::table('Servicios_ti as sti')
        ->select('sti.servicios_ti as servicio','sti.id_st as ids')
        ->get();

        $recursos=DB::table('Recurso')
        ->select('idRecurso','recurso')
        ->get();

        $entrega=DB::table('Entrega_valor')
        ->select('id_ev','entrega_valor')
        ->get();

        return view('objetivos_empresariales.ob.create',["objetivo"=>$objetivo,"palabra"=>$palabra,"sistema"=>$sistema,"recursos"=>$recursos,"entrega"=>$entrega]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // 'Palabras_union_id_pu'	'Metas_id_m'	'Servicios_ti_id_st'	'Entrega_valor_id_ev'	'Recursos_id_r'
        $meta="asdasd";
        foreach ($request->datos as $dato) {
            DB::table('Objetivo_empresarial_TI')->insert(
                array('Palabras_union_id_pu'=>$dato['pala1'],
                'Metas_id_m'=>$dato['met1'],
                'Servicios_ti_id_st'=>$dato['ser1'],
                'Entrega_valor_id_ev'=>$dato['entre1'],
                'Recurso_id_r'=>$dato['rec1'])
            );
        }
        return['msg'=> $meta];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in stoage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
