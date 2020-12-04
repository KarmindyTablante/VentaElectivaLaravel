<?php

namespace App\Http\Controllers;
use App\Categorias73;

use App\Articulos73;
use Illuminate\Http\Request;

class Articulos73Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datos['articulos']=Articulos73::paginate(10);
         $categoria = Categorias73::all();

       return view('articulos.index',$datos, ['categorias' => $categoria]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $categoria = Categorias73::all();
      return view('articulos.create', ['categorias' => $categoria]); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $datosArticulo=request()->except('_token');
        Articulos73::insert($datosArticulo);

    return redirect()->route('articulos.index')->with('alertas', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articulos73  $articulos73
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('articulos.show', ['articulo' => Articulos73::findOrFail($id)]); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articulos73  $articulos73
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categorias73::all();
        $articulo=Articulos73::findOrFail($id);
        return view('articulos.edit',compact('articulo'), ['categorias' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articulos73  $articulos73
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $datosArticulo=request()->except(['_token','_method']);
         $categoria = Categorias73::all();
        Articulos73::where('id','=',$id)->update($datosArticulo);
         $articulo=Articulos73::findOrFail($id);
        return view('articulos.edit',compact('articulo'), ['categorias' => $categoria]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articulos73  $articulos73
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Articulos73::destroy($id);
        return redirect('articulos');
    }
}
