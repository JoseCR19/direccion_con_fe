<?php

namespace Direccion\Http\Controllers;

use Illuminate\Http\Request;
use Direccion\Http\Requests;
use Direccion\Http\Controllers\Controller;
use DB;
class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function metasObEm(Request $request)
    {
        // Textos completos	
        // id_m
        // metas_empresariales
        // Objetivo_Empresarial_id_oe
        $idobem = $request->input('idObjEmpre');
        $meta=DB::table('Metas')
        ->where('Objetivo_Empresarial_id_oe','=',$idobem)
        ->select('id_m','metas_empresariales','Objetivo_Empresarial_id_oe')
        ->get();
        return['msg'=> $meta];
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Update the specified resource in storage.
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
