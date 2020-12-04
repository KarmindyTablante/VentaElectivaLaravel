<?php

namespace App\Http\Controllers;

use App\Detalles73;
use Illuminate\Http\Request;

class Detalles73Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               return view('detalles.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                       return view('detalles.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                               return view('detalles.edit');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detalles73  $detalles73
     * @return \Illuminate\Http\Response
     */
    public function show(Detalles73 $detalles73)
    {
                               return view('detalles.edit');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detalles73  $detalles73
     * @return \Illuminate\Http\Response
     */
    public function edit(Detalles73 $detalles73)
    {
                               return view('detalles.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detalles73  $detalles73
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalles73 $detalles73)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detalles73  $detalles73
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detalles73 $detalles73)
    {
        //
    }
}
