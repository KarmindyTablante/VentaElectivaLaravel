<?php

namespace App\Http\Controllers;

use App\Personas73;
use Illuminate\Http\Request;

class Personas73Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['personas']=Personas73::paginate(5);
       return view('personas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $datosPersona=request()->except('_token');
        Personas73::insert($datosPersona);

    return redirect()->route('personas.index')->with('info','El Cliente fue registrado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personas73  $personas73
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('personas.show', ['persona' => Personas73::findOrFail($id)]); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personas73  $personas73
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $persona=Personas73::findOrFail($id);
        return view('personas.edit',compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personas73  $personas73
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPersona=request()->except(['_token','_method']);
        Personas73::where('id','=',$id)->update($datosPersona);
         $persona=Personas73::findOrFail($id);
        return view('personas.edit',compact('persona'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personas73  $personas73
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Personas73::destroy($id);
        return redirect('personas');
    }
}
