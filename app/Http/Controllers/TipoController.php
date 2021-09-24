<?php

namespace App\Http\Controllers;

use App\Models\tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo ('estamos dentro de la pagina de index');
        return Tipo::get();
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
        //echo ('estamos dentro de la pagina de store');
        $tipos = new tipo();
        $tipos->nombre = $request->input('nombre');
        $tipos->save();
        echo ('se ha guardado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(tipo $tipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo $tipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $tipo)
    {
        //echo ('estamos dentro de la pagina de update');
        $tipos = Tipo::find($tipo);
        $tipos->nombre = $request->input('nombre');
        $tipos->save();
        echo ('se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy( $tipo)
    {
        //echo ('estamos dentro de la pagina de destroy');
        $tipos = Tipo::find($tipo);
        $tipos->delete();
        echo ('se ha eliminado correctamente');
    }
}
