<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perritos;

class PerritosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Perritos::where('id', '<>', 3)->get();
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perrito = new Perritos;
        $perrito->raza = $request->raza;
        $perrito->color = $request->color;
        $perrito->fecha_nacimiento_aprox = $request->fecha_nacimiento_aprox;
        $perrito->nombre_temporal = $request->nombre_temporal;
        $perrito->id_estado = $request->id_estado;
        $perrito->id_sucursal = $request->id_sucursal;
        $perrito->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Perritos::where('id', $id)->get();
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
        $perrito = Perritos::find($id);
        $perrito->raza = $request->raza;
        $perrito->color = $request->color;
        $perrito->fecha_nacimiento_aprox = $request->fecha_nacimiento_aprox;
        $perrito->nombre_temporal = $request->nombre_temporal;
        $perrito->id_estado = $request->id_estado;
        $perrito->id_sucursal = $request->id_sucursal;
        $perrito->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perrito = Perritos::find($id);
        $perrito->delete();
    }
}
