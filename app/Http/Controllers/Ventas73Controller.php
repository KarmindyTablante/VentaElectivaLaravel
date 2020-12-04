<?php

namespace App\Http\Controllers;

use App\Ventas73;
use App\Personas73;
use App\Categorias73;

use Illuminate\Http\Request;

class Ventas73Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['ventas']=Ventas73::paginate(5);
        $persona = Personas73::all();


       return view('ventas.index',$datos, ['personas' => $persona]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $persona = Personas73::all();
      $categoria = Categorias73::all();

       return view('ventas.create', ['personas' => $persona], ['categorias' => $categoria]);

    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                              return view('ventas.edit');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ventas73  $ventas73
     * @return \Illuminate\Http\Response
     */
    public function show(Ventas73 $ventas73)
    {
                       return view('ventas.edit');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ventas73  $ventas73
     * @return \Illuminate\Http\Response
     */
    public function edit(Ventas73 $ventas73)
    {
                       return view('ventas.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ventas73  $ventas73
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ventas73 $ventas73)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ventas73  $ventas73
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ventas73 $ventas73)
    {
        //
    }
}
