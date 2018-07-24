<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Sucursales;

class SucursalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $sucursales = Sucursales::all();
//        return response()->json(['data' => $sucursales,'status' => Response::HTTP_OK]);
        return Sucursales::all();
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
        $sucursales = new Sucursales;
        $sucursales->region = $request->region;
        $sucursales->comuna = $request->comuna;
        $sucursales->humano_encargado = $request->humano_encargado;
        $sucursales->id_estado = $request->id_estado;
        $sucursales->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Sucursales::where('id',$id)->get();
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
        $sucursales = Sucursales::find($id);
        $sucursales->region = $request->region;
        $sucursales->comuna = $request->comuna;
        $sucursales->humano_encargado = $request->humano_encargado;
        $sucursales->id_estado = $request->id_estado;
        $sucursales->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sucursales = Sucursales::find($id);
        $sucursales->delete();
    }
}
