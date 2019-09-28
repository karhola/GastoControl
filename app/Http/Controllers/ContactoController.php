<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use App\Contacto;

use Illuminate\Support\Facades\Mail;


class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Contacto::all();

        return view('contacto.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $datos = request()->validate([
               'nombre'=>'required',
               'apellido'=>'required',
               'direccion'=>'required',
               'ci'=>'required',
               'telefono'=>'required',

        ]);
   
        Mail::to('kl98lamas@gmail.com')->queue(new MessageReceived($datos));

   
      return view('contacto.message',compact('datos'));
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        return view('contacto.show', compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        return view('contacto.edit', compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacto $contacto)
    {
        $contacto->nombre =$request->nombre;
        $contacto->apellido =$request->apellido;
        $contacto->direccion =$request->direccion;
        $contacto->ci =$request->ci;
        $contacto->telefono =$request->telefono;
        $contacto->update();
        $datos = Contacto::all();
        return view('contacto.index',compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        $contacto->delete();    
        $datos = Contacto::all();
        return view('contacto.index',compact('datos'));
    }
}
