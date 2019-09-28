<?php

namespace App\Http\Controllers;

use App\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Ingreso::all();

        return view('ingreso.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingreso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new Ingreso();
        $datos->nombre_ingreso =$request->nom_ing;
        $datos->fecha_ingreso =$request->fecha_ing;
        $datos->descripcion_ingreso =$request->descrip_ing;
        $datos->monto_ingreso =$request->monto_ing;
        $datos->save();
        $datos = Ingreso::all();
        return view('ingreso.index',compact('datos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show(Ingreso $ingreso)
    {
        return view('ingreso.show', compact('ingreso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingreso $ingreso)
    {
        return view('ingreso.edit', compact('ingreso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingreso $ingreso)
    {
        $ingreso->nombre_ingreso =$request->nom_ing;
        $ingreso->fecha_ingreso =$request->fecha_ing;
        $ingreso->descripcion_ingreso =$request->descrip_ing;
        $ingreso->monto_ingreso =$request->monto_ing;
        $ingreso->update();
        $datos = Ingreso::all();
        return view('ingreso.index',compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingreso $ingreso)
    {
        $ingreso->delete();    
        $datos = Ingreso::all();
        return view('ingreso.index',compact('datos'));
    }
}
