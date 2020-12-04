<?php

namespace App\Http\Controllers;

use App\Categorias73;
use Illuminate\Http\Request;

class Categorias73Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['categorias']=Categorias73::paginate(5);
       return view('categorias.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $datosCategoria=request()->all();
        $datosCategoria=request()->except('_token');
        Categorias73::insert($datosCategoria);

    return redirect()->route('categorias.index')->with('info','La Categoria fue registrada exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorias73  $categorias73
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('categorias.show', ['categoria' => Categorias73::findOrFail($id)]); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorias73  $categorias73
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria=Categorias73::findOrFail($id);
        return view('categorias.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorias73  $categorias73
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosCategoria=request()->except(['_token','_method']);
        Categorias73::where('id','=',$id)->update($datosCategoria);
         $categoria=Categorias73::findOrFail($id);
        return view('categorias.edit',compact('categoria'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorias73  $categorias73
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categorias73::destroy($id);
        return redirect('categorias');
    }
}
