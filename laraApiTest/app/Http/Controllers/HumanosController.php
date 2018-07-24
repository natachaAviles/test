<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Humanos;

class HumanosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Humanos::all();
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
        $humano = new Humanos;
        $humano->nombre = $request->nombre;
        $humano->apellido = $request->apellido;
        $humano->rut = $request->rut;
        $humano->fecha_nacimiento = $request->fecha_nacimiento;
        $humano->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Humanos::where('id', $id)->get();
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
        $humano = Humanos::find($id);
        $humano->nombre = $request->nombre;
        $humano->apellido = $request->apellido;
        $humano->rut = $request->rut;
        $humano->fecha_nacimiento = $request->fecha_nacimiento;
        $humano->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $humano = Humanos::find($id);
        $humano->delete();
    }
}
